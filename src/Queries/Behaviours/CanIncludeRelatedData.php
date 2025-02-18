<?php declare(strict_types=1);

namespace Somnambulist\Components\Queries\Behaviours;

use function count;
use function is_array;
use function trigger_deprecation;

trait CanIncludeRelatedData
{
    private array $includes = [];

    /**
     * Add related data to be loaded with the query request
     *
     * Note: passing an array as the only option is deprecated and will be removed
     *       in the next major version of this library.
     *
     * @param string|array ...$includes Either an array of includes or multiple single string arguments
     *
     * @return static
     */
    public function include(...$includes): static
    {
        if (count($includes) === 1 && is_array($includes[0])) {
            trigger_deprecation('somnambulist/domain', '4.2.1', 'Passing an array of includes is deprecated. Use multiple string arguments');
            $includes = $includes[0];
        }

        $this->includes = $includes;

        return $this;
    }

    public function with(...$includes): static
    {
        trigger_deprecation('somnambulist/domain', '4.6.0', 'with() is deprecated, use include() instead');

        return $this->include(...$includes);
    }

    public function getIncludes(): array
    {
        trigger_deprecation('somnambulist/domain', '4.6.0', 'Use includes() instead');

        return $this->includes();
    }

    public function includes(): array
    {
        return $this->includes;
    }
}

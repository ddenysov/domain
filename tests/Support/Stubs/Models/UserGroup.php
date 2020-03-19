<?php declare(strict_types=1);

namespace Somnambulist\Domain\Tests\Support\Stubs\Models;

use Somnambulist\Domain\Entities\AbstractEntity;
use Somnambulist\Domain\Entities\AggregateRoot;

/**
 * Class UserGroup
 *
 * @package    Somnambulist\Domain\Tests\Support\Stubs\Models
 * @subpackage Somnambulist\Domain\Tests\Support\Stubs\Models\UserGroup
 */
class UserGroup extends AbstractEntity
{

    private Group $group;
    private Role  $role;

    public function __construct(int $id, AggregateRoot $root, Group $group, Role $role)
    {
        $this->id    = $id;
        $this->root  = $root;
        $this->group = $group;
        $this->role  = $role;
    }

    public function group(): Group
    {
        return $this->group;
    }

    public function role(): Role
    {
        return $this->role;
    }
}

<?php declare(strict_types=1);

namespace Somnambulist\Components\Tests\Support\Stubs\EventHandlers;

use Somnambulist\Components\Tests\Support\Stubs\Events\RequeuableEvent;
use Symfony\Component\Messenger\Exception\RecoverableMessageHandlingException;

/**
 * Class UserCreatedEventHandler
 *
 * @package    Somnambulist\Components\Tests\Support\Stubs\EventHandlers
 * @subpackage Somnambulist\Components\Tests\Support\Stubs\EventHandlers\UserCreatedEventHandler
 */
class RequeuableEventHandler
{
    public function __invoke(RequeuableEvent $event): void
    {
        throw new RecoverableMessageHandlingException();
    }
}

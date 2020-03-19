<?php declare(strict_types=1);

namespace Somnambulist\Domain\Doctrine\Behaviours\EntityLocator;

use Somnambulist\Domain\Entities\Exceptions\EntityNotFoundException;
use Somnambulist\Domain\Entities\Types\Identity\Uuid;

/**
 * Trait FindByUUID
 *
 * @package    Somnambulist\Domain\Doctrine\Behaviours\EntityLocator
 * @subpackage Somnambulist\Domain\Doctrine\Behaviours\EntityLocator\FindByUUID
 */
trait FindByUUID
{

    abstract protected function getEntityName();

    abstract public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);

    abstract public function findOneBy(array $criteria, array $orderBy = null);

    protected function getEntityUuidFieldName(): string
    {
        return 'uuid';
    }

    public function findByUUID(Uuid $uuid): ?object
    {
        return $this->findOneBy([$this->getEntityUuidFieldName() => (string)$uuid]);
    }

    public function findOrFailByUUID(Uuid $uuid): object
    {
        if (null === $entity = $this->findByUUID($uuid)) {
            throw EntityNotFoundException::entityNotFound($this->getEntityName(), (string)$uuid);
        }

        return $entity;
    }
}

<?php

namespace App\Common\Domain;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Identity
{
    public function __construct(
        private UuidInterface $id
    ) {
    }

    public function equals(Identity $otherIdentity)
    {
        return $this->id() === $otherIdentity->id();
    }

    public function id()
    {
        return $this->id->toString();
    }
}

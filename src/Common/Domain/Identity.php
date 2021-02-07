<?php

namespace App\Common\Domain;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Identity
{
    private UuidInterface $id;
    public function __construct(
        string $id
    ) {
        $this->id = Uuid::fromString($id);
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

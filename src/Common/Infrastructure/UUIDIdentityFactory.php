<?php


namespace App\Common\Infrastructure;


use App\Common\Domain\Identity;
use Ramsey\Uuid\Uuid;

class UUIDIdentityFactory implements \App\Common\Domain\IdentityFactory
{

    public function newIdentity(): Identity
    {
        return new Identity(Uuid::uuid4());
    }
}
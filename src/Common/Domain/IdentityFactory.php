<?php


namespace App\Common\Domain;


interface IdentityFactory
{
    public function newIdentity(): Identity;
}
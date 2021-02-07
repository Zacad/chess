<?php


namespace App\Common\Domain;


interface EventDispatcherInterface
{
    public function dispatch(EventInterface $event): void;
}
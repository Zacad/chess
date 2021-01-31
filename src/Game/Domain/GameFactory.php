<?php

namespace App\Game\Domain;

abstract class GameFactory
{
    public abstract function createGame(): Game;
}
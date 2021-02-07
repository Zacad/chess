<?php

namespace App\Game\Domain;

abstract class GameType
{

    private const GAME_NAME = 'some game';

    abstract public function gameName(): string;
}

<?php

namespace App\Game\Domain;

class ChessGameType extends GameType
{
    private const GAME_NAME = 'chess';

    public function gameName(): string
    {
        return GAME_NAME;
    }
}
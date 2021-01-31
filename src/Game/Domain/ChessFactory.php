<?php

namespace App\Game\Domain;

class ChessFactory extends GameFactory
{

    public function createGame(): Game
    {
        $chessType = new ChessGameType();
        return new Game($chessType);
    }
}
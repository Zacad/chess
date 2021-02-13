<?php


namespace App\Game\Domain;


use App\Common\Domain\Identity;

class Player
{
    private Identity $gameId;

    public function __construct()
    {

    }

    public function playGame(Identity $gameId): void
    {
        $this->gameId = $gameId;
    }

    public function isPlaying(): bool
    {
        return $this->gameId !== null;
    }
}
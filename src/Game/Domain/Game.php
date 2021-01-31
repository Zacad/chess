<?php
namespace App\Game\Domain;

final class Game
{
    const STATE_INITIATED = 0;
    const STATE_PENDING = 1;
    const STATE_ENDED = 2;

    private GameType $gameType;

    public function __construct(GameType $gameType)
    {
        $this->gameType = $gameType;
    }

}
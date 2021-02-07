<?php

namespace App\Game\Domain;

final class Game
{
    private const STATE_INITIATED = 0;
    private const STATE_PENDING = 1;
    private const STATE_ENDED = 2;

    private GameType $gameType;

    public function __construct(GameType $gameType)
    {
        $this->gameType = $gameType;
    }

    public function gameType(): string
    {
        return $this->gameType->gameName();
    }
}

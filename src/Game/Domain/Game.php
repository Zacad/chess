<?php

namespace App\Game\Domain;

final class Game
{
    private const STATE_INITIATED = 0;
    private const STATE_PENDING = 1;
    private const STATE_ENDED = 2;

    private GameType $gameType;

    public function __construct(Identity $usedId, GameType $gameType)
    {
        $this->gameType = $gameType;
        $this->creator = $usedId;
        $this->addPlayer($usedId);
    }

    public function gameType(): string
    {
        return $this->gameType->gameName();
    }

    public function addPlayer(Identity $usedId)
    {
    }
}

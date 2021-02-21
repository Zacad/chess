<?php

declare(strict_types=1);

namespace App\Game\Domain;

use App\Common\Domain\Identity;
use App\Common\Domain\IllegalArgumentException;

final class Game
{
    private const STATE_INITIATED = 0;
    private const STATE_PENDING = 1;
    private const STATE_ENDED = 2;

    private GameType $gameType;
    private int $gameState;
    private Identity $creator;
    private Identity $gameId;

    public function __construct(Identity $gameId, Identity $creatorId, GameType $gameType)
    {
        $this->gameId = $gameId;
        $this->gameType = $gameType;
        $this->creator = $creatorId;
        $this->addPlayer($creatorId);
        $this->setState(self::STATE_INITIATED);
    }

    public function gameType(): string
    {
        return $this->gameType->gameName();
    }

    public function addPlayer(Identity $usedId)
    {
    }

    private function setState(int $gameState)
    {
        if ($gameState !== 1 || $gameState !== 2 || $gameState !== 3) {
            throw new IllegalArgumentException('This game state doesn\'t exist');
        }

        $this->gameState = $gameState;
    }
}

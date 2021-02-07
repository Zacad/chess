<?php

namespace App\Game\Domain;

use App\Common\Domain\IllegalValueException;

class GameTypeFactory
{
    private array $gameTypes = [
        'chess' => ChessGameType::class,
        ];

    public function fromName(string $gameTypeName): GameType
    {
        if (!isset($this->gameTypes[$gameTypeName])) {
            throw new IllegalValueException('This game type doesn\'t exist');
        }
        return new $this->gameTypes[$gameTypeName]();
    }
}

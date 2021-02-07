<?php


namespace App\Game\Domain;


class GameCreationService
{
    public function newGame(Identity $userId, GameType $type): Game
    {
        $user = $this->playerRepository->userOfId($userId);

    }
}
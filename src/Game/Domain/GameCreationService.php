<?php

namespace App\Game\Domain;

class GameCreationService
{

    private GameFactory $gameFactory;
    private PlayerRepository $playerRepository;
    private GameRepository $gameRepository;

    public function __construct(
        GameFactory $gameFactory,
        PlayerRepository $playerRepository,
        GameRepository $gameRepository
    ) {
        $this->gameFactory = $gameFactory;
        $this->playerRepository = $playerRepository;
        $this->gameRepository = $gameRepository;
    }

    public function newGame(Identity $playerId, GameType $type): Game
    {
        $player = $this->playerRepository->playerOfId($playerId);

        if ($player->isPlaying()) {
            throw new GameCreationExceptions('Player is already playing another game');
        }
        $game = new Game($playerId, $type);
        $this->gameRepository->save($game);
    }
}

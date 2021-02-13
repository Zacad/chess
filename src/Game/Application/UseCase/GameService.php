<?php


namespace App\Game\Application\UseCase;


use App\Common\Domain\Identity;
use App\Game\Domain\GameCreationService;
use App\Game\Domain\GameRepository;
use App\Game\Domain\GameTypeFactory;
use App\Game\Domain\PlayerRepository;
use Ramsey\Uuid\Uuid;

class GameService
{

    public function __construct (
        private GameCreationService $gameCreationService,
        private PlayerRepository $playerRepository,
        private GameTypeFactory $gameTypeFactory,
        private GameRepository $gameRepository) {
    }

    public function create(string $playerId, string $gameType): void
    {
        $playerId = new Identity(UUID::fromString($playerId));
        $gameType = $this->gameTypeFactory->fromName($gameType);
        $this->gameCreationService->newGame($playerId, $gameType);
    }


}
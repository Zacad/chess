<?php


namespace App\Tests\Game\Domain;


use App\Common\Domain\Identity;
use App\Common\Domain\IdentityFactory;
use App\Game\Domain\ChessGameType;
use App\Game\Domain\Game;
use Ramsey\Uuid\Uuid;

class GameTest extends \PHPUnit\Framework\TestCase
{
    public function testItCreateGame()
    {
        $gameUuid = Uuid::uuid4()->toString();
        $gameId = new Identity($gameUuid);

        $playerUuid = Uuid::uuid4()->toString;
        $playerId = new Identity($playerUuid);

        $gameType = new ChessGameType();

        $game = new Game($gameId, $playerId, $gameType);

        $this->assertInstanceOf(Game::class, $game);
        $this->assertEquals('chess', $game->gameType());
    }
}
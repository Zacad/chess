<?php


namespace App\Tests\Game\Domain;


use App\Common\Domain\IllegalValueException;
use App\Game\Domain\ChessGameType;
use App\Game\Domain\GameTypeFactory;
use PHPUnit\Framework\TestCase;

class GameTypeFactoryTest extends TestCase
{
    public function testItCreateGameType()
    {
        // given
        $factory = new GameTypeFactory();
        $gameTypeName = 'chess';
        // when
        $gameType = $factory->fromName($gameTypeName);
        // then
        $this->assertInstanceOf(ChessGameType::class, $gameType);
    }

    public function testItFailsCreatingGameType()
    {
        $this->expectException(IllegalValueException::class);
        // given
        $factory = new GameTypeFactory();
        $gameTypeName = 'dupa';
        // when
        $gameType = $factory->fromName($gameTypeName);
        // then
    }
}
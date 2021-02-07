<?php


namespace App\Game\Domain;


interface GameTypeFactory
{

    public function fromName(string $gameTypeName): GameType;
}
<?php


namespace App\Game\Domain;


interface GameRepository
{

    public function save(Game $game): void;
}
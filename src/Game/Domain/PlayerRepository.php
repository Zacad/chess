<?php


namespace App\Game\Domain;

use App\Common\Domain\Identity;

interface PlayerRepository
{

    public function playerOfId(Identity $playerId): Player;

}
<?php


namespace App\Game\Domain;

use App\Common\Domain\Identity;

interface PlayerRepository
{

    public function userOfId(Identity $userId): Player;

}
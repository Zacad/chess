<?php


namespace App\Tests\Common\Domain;


use App\Common\Domain\Identity;
use Ramsey\Uuid\Uuid;

class IdentityTest extends \PHPUnit\Framework\TestCase
{
    public function testIdentityComparision()
    {
        // given
        $uuid = Uuid::uuid4();
        $firstIdentity = new Identity($uuid);
        $secondIdentity = new Identity($uuid);

        // when
        $equals = $firstIdentity->equals($secondIdentity);

        // then
        $this->assertTrue($equals);
    }
}
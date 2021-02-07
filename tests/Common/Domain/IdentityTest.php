<?php


namespace App\Tests\Common\Domain;


use App\Common\Domain\Identity;
use Ramsey\Uuid\Exception\InvalidUuidStringException;
use Ramsey\Uuid\Uuid;

class IdentityTest extends \PHPUnit\Framework\TestCase
{
    public function testIdentityCreation()
    {
        // given
        $stringId = Uuid::uuid4();
        $stringId = $stringId->toString();

        // when
        $identity = new Identity($stringId);

        // then

        $this->assertInstanceOf(Identity::class, $identity);

    }

    public function testItFailsIdentityCreation()
    {
        $this->expectException(InvalidUuidStringException::class);

        // given
        $stringId = 'dupa';

        // when
        $identity = new Identity($stringId);

        // then

    }

    public function testIdentityComparision()
    {
        // given
        $uuid = Uuid::uuid4();
        $uuid = $uuid->toString();
        $firstIdentity = new Identity($uuid);
        $secondIdentity = new Identity($uuid);

        // when
        $equals = $firstIdentity->equals($secondIdentity);

        // then
        $this->assertTrue($equals);
    }
}
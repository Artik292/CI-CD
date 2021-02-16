<?php

  use PHPUnit\Framework\TestCase;

  class CarTest extends TestCase
{
    public function testCarGoodColor(): void
    {
       $car = new Car('Green', 4);
       $this->assertSame('Green', $car->GetColor());
    }

    public function testCarBadDoor()
    {
       // $car = new Car('Green', 4);
       // $this->assertSame('Green', $car->GetColor());
       //$this->expectException(new Car('Yellow','Five'));
       $this->expectException("Exception");
       $this->expectExceptionMessage("Wrong input.");
       $car = new Car('Yellow','Five');
    }

    public function testBipBip()
    {
       // $car = new Car('Green', 4);
       // $this->assertSame('Green', $car->GetColor());
       //$this->expectException(new Car('Yellow','Five'));
       $this->expectOutputString("Bip Bip");
       $car = new Car('Yellow', 4);
       $car->MakeSound();
    }

    // public function testCannotBeCreatedFromInvalidEmailAddress(): void
    // {
    //     $this->expectException(InvalidArgumentException::class);
    //
    //     Email::fromString('invalid');
    // }
    //
    // public function testCanBeUsedAsString(): void
    // {
    //     $this->assertEquals(
    //         'user@example.com',
    //         Email::fromString('user@example.com')
    //     );
    // }
}

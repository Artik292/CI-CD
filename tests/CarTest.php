<?php

  use PHPUnit\Framework\TestCase;
  /**
   * @coversDefaultClass Car
   */
  class CarTest extends TestCase
{
    /**
    * @covers Car::GetColor
    */
    public function testCarGoodColor(): void
    {
       $car = new Car('Green', 4);
       $this->assertSame('Green', $car->GetColor());
    }

    /**
    * @covers Car::init
    */
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

<?php

  include_once __DIR__."/../src/Car.php";
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
    * @covers Car::__construct
    */
    public function testCarGoodDoors(): void
    {
       $car = new Car('Green', 4);
       $this->assertSame(4, $car->door_count);
    }

    /**
    * @covers Car::init
    */
    public function testCarBadDoors()
    {
       // $car = new Car('Green', 4);
       // $this->assertSame('Green', $car->GetColor());
       //$this->expectException(new Car('Yellow','Five'));
       $this->expectException("Exception");
       $this->expectExceptionMessage("Wrong input.");
       $car = new Car('Yellow','Five');
    }

    /**
    * @covers BasicCar::MakeSound
    */
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

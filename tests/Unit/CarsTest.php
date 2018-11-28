<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    public function testInsertCar()
    {
        $car = new Car();
        $car->make = "Toyota";
        $car->model= "Camry";
        $car->year= 2009;
        $this->assertTrue($car->save());
        $this->assertInternalType('int',$car->year);
    }

    public function testUpdateCarYear()
    {
        $car = Car::all()->last();
        $car-> where('id', '51')-> update(['year' => 2000]);
        $this->assertTrue($car->save());
        //dd($car);
    }
    public function testDeleteCar()
    {
        $car = Car::all()->last();
        //dd($car);
        $this->assertTrue($car->delete());
    }
}

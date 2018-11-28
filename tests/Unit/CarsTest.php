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
    public function testCarsCount()
    {
        $cars = Car::all();
        $carsCount= count($cars);
        $this->assertEquals(53,$carsCount);
        $this->assertInternalType('int',$carsCount);
        //dd($carsCount);
    }
    // car year is int
    public function testCarYearDataType()
    {
        $car = Car::inRandomOrder() ->first();
        //dd($car->year);
        //dd(gettype($car->Year));
        $year = (int) $car->Year;
        //dd($year);
        $this->assertInternalType('int',$year);
    }
    public function testCarMake()
    {
        $car = Car::inRandomOrder()->first();
        // dd($car->Make);
        $this->assertContains($car->make,["ford","honda","toyota"]);
    }
    public function testCarModelDataType()
    {
        $car = Car::inRandomOrder()->first();
        //dd($car->Model);
        $this->assertInternalType('string', $car->model);
    }
}

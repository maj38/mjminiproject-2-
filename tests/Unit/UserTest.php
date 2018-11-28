<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /* public function testExample()
     {
         $user = new User();
         $user->name ='Mohamad';
         $user->email ='maj38@njit.edu';
         $user->password='password';
         $this->assertTrue($user->save());
     }*/

    public function testUpdateUserName()
    {
        $user = User::all()->last();

        //dd($user);
        //$user->name="Steve Smith"; //To assign a name and update it using update()
        //$this->assertTrue($user->update());
        $user->where('name', 'Mohamad')->update(['name' => 'Steve Smith']);
        $this->assertTrue($user->save());
    }
}
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
    public function testExample()
     {
         $user = new User();
         $user->name ='Mohamad';
         $user->email ='maj38@nje.edu';
         $user->password='password';
         $this->assertTrue($user->save());
     }

    public function testUpdateUserName()
    {
        $users = User::all()->last();

        //dd($user);

        $users->where('name', 'Steve Smith')->update(['name' => 'Johnny Boys']);
        $this->assertTrue($users->save());
    }
}
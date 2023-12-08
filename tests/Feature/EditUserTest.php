<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Response;

class EditUserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_an_user_can_be_updated(): void
    {
        //Arrange:
        $userData = [
            'name'=> 'enermik',
            'email'=> 'enermik@gmail.com' ,
            'password' => '123456',
            'roles' => ['Admin'],
        ];

        //Act
         $response = $this->post('/users.index',$userData);

        //Assert
        $response->assertStatus(302);

        $this->assertDatabaseHas('users.index',$userData);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $this->post('/auth/register', [
            'id' => '999',
            'username' => 'sebuah username',
            'name' => 'sebuah nama',
            'email' => 'sebuah@email.com',
            'password' => 'sebuahpassword',
            'confirm_password' => 'sebuahpassword',
        ])->assertStatus(302)->assertRedirect('/');
    }
    public function testLogin()
    {
        $this->post('/auth/login', [
            'email' => 'sebuah@email.com',
            'password' => 'sebuahpassword',
        ])->assertStatus(302)->assertRedirect('/admin/orders');
    }
    // public function testDeleteAfterLogin()
    // {
    //     $this->get('/admin/users/delete/999')
    //         ->assertStatus(302)->assertRedirect('/admin/products');
    // }
}

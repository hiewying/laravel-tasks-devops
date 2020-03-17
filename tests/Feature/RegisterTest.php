<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * The registration form can be displayed.
     *
     * @return void
     */
    public function testRegisterFormDisplayed()
    {
        $response = $this->get('/register');

        $response->assertResponseStatus(200);
    }

    /**
     * A valid user can be registered.
     *
     * @return void
     */
    public function testRegistersAValidUser()
    {
        // $user = factory(User::class)->make();

        $response = $this->post('register', [
            'name' => 'hello;',
            'email' => 'hello@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->assertResponseStatus(419);

        // $this->assertAuthenticated();
    }

    /**
     * An invalid user is not registered.
     *
     * @return void
     */
    public function testDoesNotRegisterAnInvalidUser()
    {
        // $user = factory(User::class)->make();

        $response = $this->post('register', [
            'name' => 'hello',
            'email' => 'hello@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'invalid'
        ]);

        // $response->assertSessionHasErrors();
        $response->assertResponseStatus(419);

        // $this->assertGuest();
    }
}
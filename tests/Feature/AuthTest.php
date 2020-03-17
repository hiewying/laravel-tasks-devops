<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use DatabaseTransactions;

    public function testLoginFormDisplayed()
    {
        $response = $this->get('/login');

        $response->assertResponseStatus(200);
    }

    public function testDisplaysPasswordResetRequestForm()
    {
        $response = $this->get('password/reset');

        $response->assertResponseStatus(200);
    }

   
    // /**
    //  * @var array
    //  */
    // protected $userInfo;

    // /**
    //  *
    //  */
    // protected function setUp(){
    //     parent::setUp();
    //     $this->userInfo = [
    //         'name'     => 'Bob Dole',
    //         'email'    => 'test@gmail.com',
    //         'password' => 'secret',
    //     ];
    // }

    // /**
    //  * A user can register
    //  *
    //  * @return void
    //  */
    // public function testUserCanRegister()
    // {
        
        
    //     $this->visit('/register')
    //          ->type($this->userInfo['name'], 'name')
    //          ->type($this->userInfo['email'], 'email')
    //          ->type($this->userInfo['password'], 'password')
    //          ->type($this->userInfo['password'], 'password_confirmation')
    //          ->press('Register')
    //          ->see('register')
    //          ->seeInDatabase('users', ['email' => $this->userInfo['email']]);

    //     // $this->visit('/register')
    //     //  ->type('Taylor', 'name')
    //     //  ->type('test@gmail.com', 'email')
    //     //  ->type('secret', 'password')
    //     //  ->type('secret', 'password_confirmation')
    //     //  ->check('terms')
    //     //  ->press('Register')
    //     // ->see('register')
    //     // ->seeInDatabase('users', ['email' => $this->userInfo['email']]);
    // }

    // /**
    //  * A user can login
    //  *
    //  * @return void
    //  */
    // public function testUserCanLoginAndLogout()
    // {
    //     $this->withExceptionHandling();

    //     $this->visit('/login')
    //          ->type($this->userInfo['email'], 'email')
    //          ->type($this->userInfo['password'], 'password')
    //          ->press('Login')
    //          ->see('Dashboard');

    //     $this->post('/logout')
    //         ->assertResponseStatus(419);
    // }

    // /**
    //  * A user cannot login with invalid password
    //  *
    //  * @return void
    //  */
    // public function testUserCannotLoginWithoutValidPassword()
    // {
    //     $this->visit('/login')
    //          ->type($this->userInfo['email'], 'email')
    //          ->type('wrongpassword', 'password')
    //          ->press('Login')
    //          ->dontSee('Dashboard');
    // }
}

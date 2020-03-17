<?php

namespace Tests;

use Laravel\BrowserKitTesting\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public $baseUrl = 'http://127.0.0.1:8000';

    protected function signIn($user = null)
    {
        // use passed in user or create one
        $user = $user ?: create('App\User');
        $this->actingAs($user);
        return $this;
    }
}

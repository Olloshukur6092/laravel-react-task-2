<?php

namespace Tests\Unit;

use Tests\TestCase;

class LoginTest extends TestCase
{
    private const URL = "api/auth/login";

    // this method return 401
    public function test_login_return_401()
    {
        $response = $this->post(self::URL, [
            'login' => 'Olloshukur',
            'password' => '123131',
        ]);

        $response->assertStatus(401);
    }

    // this method return 422
    public function test_login_return_422()
    {
        $response = $this->post(self::URL, [
            'login' => '',
            'password' => '',
        ]);

        $response->assertStatus(422);
    }

    // this method return 200
    public function test_login_return_200() 
    {
        $response = $this->post(self::URL, [
            'login' => 'Olloshukur',
            'password' => '123456',
        ]);

        $response->assertStatus(200);
    }

}

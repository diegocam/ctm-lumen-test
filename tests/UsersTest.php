<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testUserCreateValidation(array $params, int $expectedStatus)
    {
        $response = $this->call('POST', '/register', $params);
        $this->assertEquals($expectedStatus, $response->status());
    }

    public function additionProvider(): array
    {
        return [
            [
                [
                    'first_name' => 'Diego',
                    'last_name' => 'Camacho',
                    'email' => 'good@email.com',
                    'opt_in' => '0',
                ],
                200
            ],
            [
                [
                    'first_name' => 'Diego',
                    'last_name' => 'Camacho',
                    'email' => 'bademail.com',
                    'opt_in' => '0',
                ],
                422
            ]
        ];
    }
}

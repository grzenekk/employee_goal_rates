<?php

namespace Tests\Feature;

use Tests\TestCase;

class BaseTestCase extends TestCase
{
    protected $token = '';

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->token = 'test';
    }

    protected function sendRequest($method, $url, $input)
    {
        return $this->json($method, $url, $input, ['Authorization' => 'Bearer ' . $this->token]);
    }
}


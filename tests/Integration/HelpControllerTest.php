<?php

namespace Tests\Integration;

use Tests\TestCase;

class HelpControllerTest extends TestCase
{
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertJsonFragment(['name' => 'Walk Off']);
        $response->assertJsonStructure(['name', 'description', 'version']);
    }
}

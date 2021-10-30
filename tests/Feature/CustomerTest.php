<?php

namespace Tests\Feature;

use Tests\TestCase;


class CustomerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_deve_carregar_pagina_de_clientes()
    {
        $response = $this->get('/clientes');
        var_dump($response);
        exit;
        $response->assertStatus(200);
    }
}

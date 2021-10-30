<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Customer;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    use RefreshDatabase;

    /**
     *
     * @return void
     */
    public function test_deve_criar_um_cliente()
    {
        $create =  (new Customer())->create([
            'name' => 'lucas almeida',
            'email' => 'lucas@email.com',
            'cpf' => '1231231232'
        ]);

        $this->assertEquals(1, $create->id);
    }

    /**
     *
     * @return void
     */
    public function test_deve_limpar_o_cpf_do_cliente_ao_cadastrar()
    {
        $create =  (new Customer())->create([
            'name' => 'lucas almeida',
            'email' => 'lucas@email.com',
            'cpf' => 'rross123apoqpo'
        ]);

        $this->assertEquals(1234, $create->cpf);
    }
}

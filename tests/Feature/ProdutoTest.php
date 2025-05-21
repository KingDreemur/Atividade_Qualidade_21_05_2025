<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Conta;

class ContaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function consegue_listar_contas()
    {
        Conta::factory()->count(3)->create([
            'nome' => 'Conta Exemplo'
        ]);

        $response = $this->get('/contas');

        $response->assertStatus(200);
        $response->assertSee('Conta Exemplo');
    }

    /** @test */
    public function consegue_criar_uma_conta()
    {
        $response = $this->post('/contas', [
            'nome' => 'Conta Corrente',
            'saldo' => 1000.00,
            'descricao' => 'Conta principal'
        ]);

        $response->assertRedirect('/contas');
        $this->assertDatabaseHas('contas', [
            'nome' => 'Conta Corrente',
            'saldo' => 1000.00,
            'descricao' => 'Conta principal'
        ]);
    }

    /** @test */
    public function consegue_atualizar_uma_conta()
    {
        $conta = Conta::factory()->create([
            'nome' => 'Conta Antiga',
            'saldo' => 500.00
        ]);

        $response = $this->put("/contas/{$conta->id}", [
            'nome' => 'Conta Atualizada',
            'saldo' => 750.00,
            'descricao' => 'Conta modificada'
        ]);

        $response->assertRedirect('/contas');
        $this->assertDatabaseHas('contas', [
            'id' => $conta->id,
            'nome' => 'Conta Atualizada',
            'saldo' => 750.00
        ]);
    }

    /** @test */
    public function consegue_deletar_uma_conta()
    {
        $conta = Conta::factory()->create();

        $response = $this->delete("/contas/{$conta->id}");

        $response->assertRedirect('/contas');
        $this->assertDatabaseMissing('contas', ['id' => $conta->id]);
    }
}

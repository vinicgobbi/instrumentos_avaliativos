<?php

namespace Tests\Feature;

use App\Models\INSTRUMENTO_AVALIATIVO;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InstrumentoAvaliativoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_return_all_instrumentos()
    {
        INSTRUMENTO_AVALIATIVO::factory()->count(5)->create();

        $response = $this->getJson('/coordinator/instrumentos-avaliativos/get');

        $response->assertStatus(200)
                ->assertJsonCount(5);
    }

    /** @test */
    public function can_return_instrumento_by_name(): void
    {
        $instrumentos = INSTRUMENTO_AVALIATIVO::factory()->count(1)->create();

        $name = $instrumentos->first()->titulo;

        $response = $this->getJson("/coordinator/instrumentos-avaliativos/get/{$name}");

        $response->assertStatus(200)->assertJsonFragment(['titulo' => $name]);
    }
}

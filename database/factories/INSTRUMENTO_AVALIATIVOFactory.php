<?php

namespace Database\Factories;

use App\Models\INSTRUMENTO_AVALIATIVO;
use Illuminate\Database\Eloquent\Factories\Factory;

class INSTRUMENTO_AVALIATIVOFactory extends Factory
{
    protected $model = INSTRUMENTO_AVALIATIVO::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'descricao' => $this->faker->paragraph(2),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Ave;
use Illuminate\Database\Eloquent\Factories\Factory;

class AveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ave::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'color' => $this->faker->safeColorName,
            'tamano' => $this->faker->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'peso' => $this->faker->randomFloat(2, 0.1, 10),
            'tamano_pico' => $this->faker->randomFloat(2, 1, 10),
            'tamano_alas' => $this->faker->randomFloat(2, 10, 100),
            'tipo' => $this->faker->randomElement(['Rapaz', 'Canora', 'Acuática']),
            'horario_caza' => $this->faker->randomElement(['diurno', 'nocturno']),
            'esperanza_vida' => $this->faker->numberBetween(1, 50),
            'habitat' => $this->faker->word,
            'vuela' => $this->faker->boolean,
            'cantante' => $this->faker->boolean,
            'region' => $this->faker->country,
            'descripcion' => $this->faker->sentence,
        ];
    }
}


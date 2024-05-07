<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ModelCategoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ModelCategoria>
 */
class ModelCategoriaFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ModelCategoria::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'nombre' => $this->faker->name(),
                'descripcion' => $this->faker->text(),
                'cantidad_aves' => $this->faker->numberBetween(1, 100),
            ];
    }
}

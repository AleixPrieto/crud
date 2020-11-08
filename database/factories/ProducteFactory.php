<?php

namespace Database\Factories;

use App\Models\Producte;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProducteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producte::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->company,
            "provider"=>$this->faker->paragraph(1),
            "user_id"=>User::all()->random()->id,
            "created_at"=>now()
        ];
    }
}

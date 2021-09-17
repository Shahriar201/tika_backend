<?php

namespace Database\Factories;

use App\Models\Upazila;
use App\Models\Vaccination_Center;
use App\Models\Vaccine;
use Illuminate\Database\Eloquent\Factories\Factory;

class Vaccination_CenterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vaccination_Center::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->address,
            'upazila_id' => Upazila::all()->random()->id,
            'vaccine_id' => Vaccine::all()->random()->id,
            'available' => 200,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_no' => $this->faker->ean8(),
            'dob' => $this->faker->date(),
            'office' => $this->faker->word(),
            'registered' => rand(0,1),
        ];
    }
}

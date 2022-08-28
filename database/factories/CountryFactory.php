<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Country;
class CountryFactory extends Factory
{

    /**

     * The name of the factory's corresponding model.

     *

     * @var string

     */

    protected $model = Country::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->country,
            'code' => $this->faker->stateAbbr,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

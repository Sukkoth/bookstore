<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Language;

class LanguageFactory extends Factory
{

     /**

     * The name of the factory's corresponding model.

     *

     * @var string

     */

    protected $model = Language::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        return [
            'name' => $this->faker->randomElement($array = array ('Afaa Oromoo','English','Amharic', 'Chinese', 'Korean', 'Indian', )),
            'country_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

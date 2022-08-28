<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;
class AuthorFactory extends Factory
{


    /**

     * The name of the factory's corresponding model.

     *

     * @var string

     */

    protected $model = Author::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'country_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'avatar' => 'images/authors/avatars/default.png',
            'about' => $this->faker->text($maxNbChars = 300),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

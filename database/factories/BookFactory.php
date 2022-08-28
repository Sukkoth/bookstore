<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\Category;
class BookFactory extends Factory
{

    /**

     * The name of the factory's corresponding model.

     *

     * @var string

     */

    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'published' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'annotation' => $this->faker->text($maxNbChars = 300),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min=20, $max = 100),
            'language_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'category_id' => $this->faker->randomElement($array = Category::all()->pluck('id')),
            'pages' => $this->faker->numberBetween($min = 50, $max = 1500),
            'publisher' => $this->faker->company,
            'quantity' => $this->faker->numberBetween($min=1, $max=4),
            'cover' => 'default.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

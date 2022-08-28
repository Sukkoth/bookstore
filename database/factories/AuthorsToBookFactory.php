<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuthorsToBook;
use App\Models\Author;
use App\Models\Book;

class AuthorsToBookFactory extends Factory
{

    /**

     * The name of the factory's corresponding model.

     *

     * @var string

     */

    protected $model = AuthorsToBook::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => $this->faker->randomElement($array = Author::all()->pluck('id')),
            'book_id' => $this->faker->randomElement($array = Book::all()->pluck('id')),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

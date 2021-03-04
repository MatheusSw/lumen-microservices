<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
    	return [
    	    'name' => $this->faker->name(),
            'number_of_pages' => $this->faker->numberBetween(10, 1000),
            'description' => $this->faker->realText(100),
            'author_id' => 1, //Boy-oh-boy should this call the author API or requires a Saga?
    	];
    }
}
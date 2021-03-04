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
    	    'name' => $this->faker->sentence(3),
            'number_of_pages' => $this->faker->numberBetween(10, 1000),
            'description' => $this->faker->realText(100),
            //TODO URGENT: CHANGE THIS numberBetween to either a saga result or a API call
            //this is such a shenanigan I don't even want to talk about it
            'author_id' => $this->faker->numberBetween(1,50),
    	];
    }
}

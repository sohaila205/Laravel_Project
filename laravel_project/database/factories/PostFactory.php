<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id'=>User::factory(),
            'category_id'=>1,
            'slug'=>$this->faker->sentence,
            'title'=>$this->faker->word,
            'excerpt'=>$this->faker->sentence,
            'body'=>$this->faker->paragraph,

        ];
    }
}

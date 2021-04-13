<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
   public function definition()
    {
        return [
           'name' => $this->faker->text(20),
           'surname' => $this->faker->text(20),
           'email' => $this->faker->text(20),
           'commentary' => $this->faker->text(100)
        ];
    }
}

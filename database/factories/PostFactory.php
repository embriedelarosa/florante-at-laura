<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use App\Models\Posts;
use App\Models\Student;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    //protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'content' => $this->faker->paragraph
        ];
    }
}
//[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
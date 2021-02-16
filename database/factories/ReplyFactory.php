<?php

namespace Database\Factories;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reply::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thread_id' => function() {
                return self::factoryForModel(Thread::class)->create()->id;
            },
            'user_id' => function() {
                return self::factoryForModel(User::class)->create()->id;
            },
            'body' => $this->faker->paragraph
        ];
    }
}

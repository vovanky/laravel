<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_loaitin' => 2,
            'id_user' =>1,
            'name' => $this->faker -> text,
            'summary' => $this->faker -> text,
            'content' => $this->faker -> text,
            'status' =>$this->faker->numberBetween(0,1),
        ];
    }
}

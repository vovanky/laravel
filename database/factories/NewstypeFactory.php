<?php

namespace Database\Factories;

use App\Models\NewsType;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewstypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Newstype::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_theloai' => 1,
            'name' => $this->faker -> name,
            'status' => $this->faker -> numberBetween(0,1),
        ];
    }
}

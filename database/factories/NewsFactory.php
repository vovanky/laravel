<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_theloai' => 1,
            'id_loaitin' => 2,
            'name' => $faker -> text,
            'sumary' => $faker -> text,
            'content' => $faker -> text,
            'views' => $faker -> number,
        ];
    }
}

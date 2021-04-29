<?php

namespace Database\Factories;

use App\Models\Advertisement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertisementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advertisement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_loaitin' => 1,
            'name' => $this->faker -> text,
            'content' => $this->faker -> text,
            'location' => $this->faker -> name,
            'url_hinh' => $this->faker -> url,
            'status' => $this->faker -> numberBetween(0,1),
        ];
    }
}

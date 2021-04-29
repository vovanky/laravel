<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsType;

class NewsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Newstype::factory()->count(10)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Proverb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProverbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proverb::factory()->count(40)->create();
    }
}

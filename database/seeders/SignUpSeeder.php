<?php

namespace Database\Seeders;

use App\Models\Signup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SignUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Signup::factory()->count(3)->create();
    }
}

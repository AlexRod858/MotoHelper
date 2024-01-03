<?php

namespace Database\Seeders;
use App\Models\Moto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Moto::factory()->count(10)->create();
    }
}

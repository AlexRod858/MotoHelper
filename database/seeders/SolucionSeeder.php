<?php

namespace Database\Seeders;
use App\Models\Solucion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Solucion::factory()->count(70)->create();
    }
}

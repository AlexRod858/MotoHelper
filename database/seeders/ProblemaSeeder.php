<?php

namespace Database\Seeders;
use App\Models\Problema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProblemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Problema::factory()->count(30)->create();
    }
}

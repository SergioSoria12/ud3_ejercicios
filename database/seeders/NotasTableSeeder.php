<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notas')->insert([
            ['alumno_id' => 1, 'asignatura_id' => 1, 'nota' => 85, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['alumno_id' => 1, 'asignatura_id' => 2, 'nota' => 90, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['alumno_id' => 2, 'asignatura_id' => 1, 'nota' => 88, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['alumno_id' => 2, 'asignatura_id' => 3, 'nota' => 75, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['alumno_id' => 3, 'asignatura_id' => 2, 'nota' => 92, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['alumno_id' => 3, 'asignatura_id' => 3, 'nota' => 80, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}

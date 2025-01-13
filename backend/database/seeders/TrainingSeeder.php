<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trainings')->insert([
            [
                'name' => 'programtervező',
                'level' => 'alap',
                'terms' => 6,
            ],
            [
                'name' => 'politikatudományok',
                'level' => 'alap',
                'terms' => 6,
            ],
            [
                'name' => 'tanárképzés',
                'level' => 'osztatlan',
                'terms' => 10,
            ],
            [
                'name' => 'jogász',
                'level' => 'osztatlan',
                'terms' => 10,
            ],
            [
                'name' => 'anglisztika',
                'level' => 'alap',
                'terms' => 6,
            ],
            [
                'name' => 'történelem',
                'level' => 'mester',
                'terms' => 4,
            ],
            [
                'name' => 'programtervező',
                'level' => 'mester',
                'terms' => 4,
            ],
            [
                'name' => 'gépészmérnök',
                'level' => 'alap',
                'terms' => 7,
            ],
            [
                'name' => 'pénzügy és számvitel',
                'level' => 'alap',
                'terms' => 7,
            ],
            [
                'name' => 'matematika',
                'level' => 'alap',
                'terms' => 6,
            ],
            [
                'name' => 'marketing',
                'level' => 'mester',
                'terms' => 4,
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'neptun_code' => 'ABC123',
                'name' => 'Nagy László',
                'training_id' => 3,
                'admission' => '2021-09-01',
                'term' => 5,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'DEF456',
                'name' => 'Kovács Anna',
                'training_id' => 7,
                'admission' => '2023-02-01',
                'term' => 2,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'GHI789',
                'name' => 'Szabó Péter',
                'training_id' => 9,
                'admission' => '2020-09-01',
                'term' => 7,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'JKL012',
                'name' => 'Tóth Márta',
                'training_id' => 5,
                'admission' => '2022-02-01',
                'term' => 1,
                'active_term' => false,
            ],
            [
                'neptun_code' => 'MNO345',
                'name' => 'Varga István',
                'training_id' => 2,
                'admission' => '2019-09-01',
                'term' => 6,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'PQR678',
                'name' => 'Kiss Éva',
                'training_id' => 10,
                'admission' => '2023-02-01',
                'term' => 2,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'STU901',
                'name' => 'Balogh Ferenc',
                'training_id' => 7,
                'admission' => '2020-09-01',
                'term' => 9,
                'active_term' => false,
            ],
            [
                'neptun_code' => 'VWX234',
                'name' => 'Németh Tamás',
                'training_id' => 1,
                'admission' => '2021-09-01',
                'term' => 4,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'YZA567',
                'name' => 'Molnár Katalin',
                'training_id' => 6,
                'admission' => '2023-02-01',
                'term' => 1,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'BCD890',
                'name' => 'Horváth Gergely',
                'training_id' => 4,
                'admission' => '2019-09-01',
                'term' => 7,
                'active_term' => false,
            ],
            [
                'neptun_code' => 'EFG123',
                'name' => 'Kocsis Zsófia',
                'training_id' => 11,
                'admission' => '2020-09-01',
                'term' => 5,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'HIJ456',
                'name' => 'Fehér Attila',
                'training_id' => 8,
                'admission' => '2022-02-01',
                'term' => 1,
                'active_term' => false,
            ],
            [
                'neptun_code' => 'KLM789',
                'name' => 'Török Dóra',
                'training_id' => 7,
                'admission' => '2021-09-01',
                'term' => 3,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'NOP012',
                'name' => 'Jakab Lili',
                'training_id' => 9,
                'admission' => '2023-02-01',
                'term' => 2,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'QRS345',
                'name' => 'Oláh Ádám',
                'training_id' => 1,
                'admission' => '2019-09-01',
                'term' => 6,
                'active_term' => false,
            ],
            [
                'neptun_code' => 'TUV678',
                'name' => 'Lukács Sára',
                'training_id' => 5,
                'admission' => '2020-09-01',
                'term' => 5,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'WXY901',
                'name' => 'Simon Balázs',
                'training_id' => 3,
                'admission' => '2023-02-01',
                'term' => 1,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'ZAB234',
                'name' => 'Pintér Mónika',
                'training_id' => 2,
                'admission' => '2021-09-01',
                'term' => 6,
                'active_term' => true,
            ],
            [
                'neptun_code' => 'CDE567',
                'name' => 'Sipos Róbert',
                'training_id' => 4,
                'admission' => '2019-09-01',
                'term' => 8,
                'active_term' => false,
            ],
            [
                'neptun_code' => 'FGH890',
                'name' => 'Farkas Vivien',
                'training_id' => 4,
                'admission' => '2022-02-01',
                'term' => 2,
                'active_term' => true,
            ],
        ]);
    }
}

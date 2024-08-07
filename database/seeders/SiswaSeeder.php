<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            ['nama' => 'steve', 'kelas' => '12', 'alamat' => 'garut', 'hobi' => 'musik'],
            ['nama' => 'charlie', 'kelas' => '9', 'alamat' => 'bandung', 'hobi' => 'musik'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
            ['id'=> 001,'nama' => 'steve', 'kelas' => 12, 'alamat' => 'garut', 'hobi' => 'musik'],
            ['id' => 002,'nama' => 'charlie', 'kelas' => 9, 'alamat' => 'bandung', 'hobi' => 'musik'],
        ];
    }
}

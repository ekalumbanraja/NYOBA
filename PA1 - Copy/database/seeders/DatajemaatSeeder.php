<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatajemaatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
     //insert data ke db 
    public function run()
    {   
        DB::table('datajemaats')->insert([
            'nama'=>'Eka Syahputra',
            'jeniskelamin' => 'Laki-laki',
            'alamat' => 'Sidikalang , Sumatera utara',
            'notelpon' => '21319321312',

        ]);
    }
}

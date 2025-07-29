<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;       
use Illuminate\Database\Seeder;
use App\Models\Suplier;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Suplier::insert([
            [
                'kode_suplier' => 'SOO1',
                'nama_suplier' => 'Suplier 1',
                'alamat_suplier' => 'Alamat Suplier',
                'no_telp_suplier' => '8967898949',
            ],
            [
                'kode_suplier' => 'SOO1',
                'nama_suplier' => 'Suplier 2',
                'alamat_suplier' => 'Alamat Suplier',
                'no_telp_suplier' => '8967898949',
            ],
            [

                'kode_suplier' => 'SOO1',
                'nama_suplier' => 'Suplier 3',
                'alamat_suplier' => 'Alamat Suplier',
                'no_telp_suplier' => '8967898949',
            ],
            [
                'kode_suplier' => 'SOO1',
                'nama_suplier' => 'Suplier 4',
                'alamat_suplier' => 'Alamat Suplier',
                'no_telp_suplier' => '8967898949',
            ],
            [
                'kode_suplier' => 'SOO1',
                'nama_suplier' => 'Suplier 5',
                'alamat_suplier' => 'Alamat Suplier',
                'no_telp_suplier' => '8967898949',
            ]
            ]);

    }
}

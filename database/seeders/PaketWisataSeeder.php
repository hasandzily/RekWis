<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaketWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaketWisata::create([
            'nama_wisata' => 'Dusun Bambu',
            'gambar' => 'https://phinemo.com/wp-content/uploads/2019/10/grafika-cikole-1-1024x678.jpg',
            'alamat' => 'Jl. Kolonel Masturi KM. 11, Dusun Bambu Lembang, Kertawangi, Kec. Cisarua, Kabupaten Bandung Barat, Jawa Barat, Indonesia, 40551',
            'jam_operasional' => '10.00 WIB - 20.00 WIB',
            'harga_tiket' => 'Rp 50.000 - Rp 150.000',
            'telepon' => '0815-6380-8021',
            'rating' => '4.5',
        ]);
        //
    }
}

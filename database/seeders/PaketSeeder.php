<?php

namespace Database\Seeders;
use App\Models\Paket;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paket::create([
            'nama_wisata' => 'Dusun Bambu',
            'gambar' => 'https://cdn1-production-images-kly.akamaized.net/vXpi6ciKf0M2VD8oRULuN1NpvjM=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3422602/original/091769800_1617802968-WhatsApp_Image_2021-04-06_at_9.42.39_PM.jpeg',
            'alamat' => 'Jl. Kolonel Masturi KM. 11, Dusun Bambu Lembang, Kertawangi, Kec. Cisarua, Kabupaten Bandung Barat, Jawa Barat, Indonesia, 40551',
            'jam_operasional' => '10.00 WIB - 20.00 WIB',
            'harga_tiket' => 'Rp 50.000 - Rp 150.000',
            'telepon' => '0815-6380-8021',
            'rating' => '4.5',
        ]);
        
        //
    }
}

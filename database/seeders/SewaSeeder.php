<?php

namespace Database\Seeders;
use App\Models\Sewa;
use Illuminate\Database\Seeder;

class SewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sewa::create([
            'nama_hotel' => 'ASTON',
            'image' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/03/sewa-mobil-pajero-e1614778579958.png',
            'harga' => '1.800.000',
            'rating' => '4.5',
        ]);;//
    }
}

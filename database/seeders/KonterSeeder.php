<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\konter;

class KonterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Konter::create([
            'id' => 1,
            'gambar' => 'indosat.png',
            'judul' => 'Indosat ',
            'deskripsi' => 'HKeuntungan · Masa berlaku 30 Hari · Kuota harian 10 GB / Hari · Kuota utama 10 GB · Kuota aplikasi 35 GB.'
        ]);

        Konter::create([
            'id' => 2,
            'gambar' => 'tri.png',
            'judul' => 'Tri ',
            'deskripsi' => 'AlwaysOn (AON) dan Unlimited AlwaysOn (Unlimited / AON UL) adalah produk paket data Tri dari Indosat Ooredoo Hutchison (IOH) untuk Pelanggan Layanan Prabayar Tri (Produk.'
        ]);

        Konter::create([
            'id' => 3,
            'gambar' => 'xl.png',
            'judul' => 'XL ',
            'deskripsi' => 'Dengan Xtra Combo Flex, kamu bisa bebas pilih bonusnya. Aktifkan kartu perdana XL dapatkan bonus double kuota setiap isi ulang paket Xtra Combo Flex selama setahun penuh.'
        ]);
    }
}

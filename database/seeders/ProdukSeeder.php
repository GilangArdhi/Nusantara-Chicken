<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [
                'namaProduk' => 'Telur Ayam Negri',
                'gambarProduk' => 'galeri1.png',
                'stokProduk' => 1,
                'deskripsi' => 'produk yang dihasilkan oleh betina ayam. Telur ini merupakan salah satu sumber protein hewani yang sangat bergizi dan sering digunakan dalam berbagai resep makanan. Telur ayam mengandung banyak nutrisi penting seperti protein, vitamin A, vitamin B, vitamin D, vitamin E, serta mineral seperti zat besi dan selenium.',
                'harga' => 35000,
            ],
            [
                'namaProduk' => 'Daging Ayam Negri',
                'gambarProduk' => 'galeri2.png',
                'stokProduk' => 1,
                'deskripsi' => 'produk daging yang dihasilkan dari pemotongan ayam. Biasanya ayam yang digunakan adalah ayam broiler, yang dikembangkan khusus untuk produksi daging. Daging ayam kaya akan protein, rendah lemak (tergantung pada bagian tubuhnya)',
                'harga' => 35000,
            ],
            [
                'namaProduk' => 'Telur Ayam Jawa',
                'gambarProduk' => 'galeri3.png',
                'stokProduk' => 1,
                'deskripsi' => 'Telur ayam Jawa juga berasal dari ayam ras lokal Indonesia, seperti ayam Kampung. Telur ayam Jawa cenderung memiliki ukuran yang lebih kecil dibandingkan dengan telur ayam ras komersial, tetapi memiliki cangkang yang lebih kuat.',
                'harga' => 35000,
            ],
            [
                'namaProduk' => 'Daging Ayam Jawa',
                'gambarProduk' => 'galeri4.png',
                'stokProduk' => 1,
                'deskripsi' => 'Daging ayam Jawa berasal dari ayam ras lokal Indonesia yang dikenal dengan nama ayam Kampung atau ayam Jawa. Ayam ini umumnya dibesarkan secara tradisional, dengan ciri khas memiliki tubuh yang kecil dan berbulu berwarna agak gelap.',
                'harga' => 35000,
            ],
        ];

        foreach ($product as $produk) {
            Produk::create($produk);
        }
    }
}

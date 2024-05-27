<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [
                'name' => 'Admin',
                'email' => 'sahaputrdwi18@students.amikom.ac.id',
                'password' => bcrypt('nusantarachicken'),
            ],
        ];
        foreach ($product as $produk) {
            User::create($produk);
        }
    }
}

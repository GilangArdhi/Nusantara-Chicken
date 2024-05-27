<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = [
        'idProduk',
        'namaProduk',
        'gambarProduk',
        'stokProduk',
        'harga',
        'deskripsi'
    ];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $primary = 'id';
    protected $table = 'produks';
    // protected $fillable = ['kd_produk','nm_produk','harga','deskripsi','gambar','kd_kategori'];
    protected $guarded = ['id'];

}

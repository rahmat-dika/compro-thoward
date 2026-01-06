<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Nama tabel
    protected $table = 'products';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'product_name',
        'photo',
        'description',
        'type',
        'created_by',
        'updated_by',
    ];

    // Laravel secara default pakai created_at & updated_at
    // karena di migration kamu definisikan manual, pastikan timestamps = false
    public $timestamps = false;

    // Kalau mau pakai custom date format
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}

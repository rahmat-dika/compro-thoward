<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    // Nama tabel
    protected $table = 'certificate';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'collection_name',
        'serial_number',
        'qr_code_number',
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

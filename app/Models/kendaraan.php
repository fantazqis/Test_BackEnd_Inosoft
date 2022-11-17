<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'kendaraans';
    protected $fillable = [
        'tahun_keluaran', 'warna', 'harga', 'stok', 'terjual', 'tipe_kendaraan', ' mesin', 'tipe_suspensi', 'kapasistas_penumpang', 'tipe_transmisi', 'tipe'
    ];
}

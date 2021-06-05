<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang0109 extends Model
{
    use HasFactory;

    protected $table = 'barang0109';

    protected $fillable = [
        'id',
        'nama_brg',
        'harga',
    ];
}

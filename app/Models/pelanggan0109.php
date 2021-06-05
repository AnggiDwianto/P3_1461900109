<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan0109 extends Model
{
    use HasFactory;

    protected $table = 'pelanggan0109';

    protected $fillable = [
        'id',
        'nama_plg',
        'alamat',
    ];
}

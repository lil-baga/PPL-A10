<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyuluhan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'penyuluhan';
    protected $casts = [
        'tanggal_penyuluhan'=>'datetime'
    ];
}

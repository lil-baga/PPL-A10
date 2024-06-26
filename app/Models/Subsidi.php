<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsidi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'subsidi';
    protected $casts = [
        'tanggal_pengambilan'=>'datetime'
    ];
}

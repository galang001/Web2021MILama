<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    use HasFactory;
    protected $table = 'bios';
    protected $fillable =[
        'user_id',
        'nama',
        'j_kelamin',
        'alamat',
        'tanggal_lahir',
    ];
}
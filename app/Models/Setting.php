<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = ['alamat1', 'alamat2', 'map', 'phone', 'email', 'instagram', 'facebook', 'whatsapp', 'youtube', 'tiktok'];
}

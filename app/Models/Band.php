<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable = ['name', 'genre', 'founded', 'active_till'];

    // Als je de timestamps 'created_at' en 'updated_at' in de tabel wilt gebruiken
    public $timestamps = true;
}

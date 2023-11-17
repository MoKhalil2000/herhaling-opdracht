<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    protected $fillable = ['name', 'year', 'times_sold'];

    // Als je de timestamps 'created_at' en 'updated_at' in de tabel wilt gebruiken
    public $timestamps = true;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangimport extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'jenis', 'asal', 'tanggal_import', 'foto'];
}

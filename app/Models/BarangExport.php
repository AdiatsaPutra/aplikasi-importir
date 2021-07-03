<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangexport extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'jenis', 'tujuan', 'tanggal_export', 'foto'];
}

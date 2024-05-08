<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nomor_id',
        'jenis_kelamin',
        'jenis_infus',
        'jenis_penyakit',
        'target_tpm',
        'mac',
    ];
}

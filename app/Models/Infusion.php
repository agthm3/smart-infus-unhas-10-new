<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infusion extends Model
{
    use HasFactory;

    protected $table = 'infusions';

    public function patient()
    {
        // Asumsi 'mac' ada di kedua tabel dan bisa digunakan untuk relasi
        return $this->belongsTo(Patient::class, 'mac', 'mac');
    }
}

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
        return $this->belongsTo(Patient::class, 'patient_id'); // Pastikan kolom foreign key benar
    }
}

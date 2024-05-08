<?php
namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;


class PatientController extends Controller
{
    public function create()
    {
        $allpasien = Patient::all();
        return view('pasien.index', compact('allpasien'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_id' => 'required|unique:patients',
            'jenis_kelamin' => 'required',
            'jenis_infus' => 'required',
            'jenis_penyakit' => 'required',
            'target_tpm' => 'required|integer',
            'mac' => 'required|unique:patients'
        ]);

        $patient = new Patient($request->all());
        $patient->save();

        return redirect()->route('patients.create')->with('success', 'Pasien berhasil ditambahkan.');
    }
}

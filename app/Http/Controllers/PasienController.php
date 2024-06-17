<?php

namespace App\Http\Controllers;

use App\Models\Infusion;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Models\Patient;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mengambil nilai pencarian dari request
        $search = $request->input('search');

        // Jika ada pencarian, filter pasien berdasarkan nama
        if ($search) {
            $allpasien = Patient::where('nama', 'LIKE', "%{$search}%")->get();
        } else {
            $allpasien = Patient::all();
        }

        return view('pasien.index', compact('allpasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        // Fetch the latest infusion data for the same MAC address
        $latestInfusion = Infusion::where('mac', $patient->mac)
                                  ->latest('created_at')
                                  ->first();

        return view('pasien.show', compact('patient', 'latestInfusion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        return view('pasien.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_id' => 'required|unique:patients,nomor_id,' . $patient->id,
            'jenis_kelamin' => 'required',
            'jenis_infus' => 'required',
            'jenis_penyakit' => 'required',
        ]);

        $patient->update($request->all());

        return redirect()->route('detail-pasien.show', $patient)->with('success', 'Data pasien berhasil diperbarui.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('daftar-pasien.index');
    }
}

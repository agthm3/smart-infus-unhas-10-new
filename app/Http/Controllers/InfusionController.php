<?php

namespace App\Http\Controllers;

use App\Models\Infusion;
use Illuminate\Http\Request;
use App\Models\Patient;


class InfusionController extends Controller
{
    public function store(Request $request)
    {
        // Hapus data terlama jika sudah ada 10 data
        if (Infusion::count() >= 10) {
            Infusion::oldest()->first()->delete();
        }

        // Simpan data baru
        $infusion = new Infusion();
        $infusion->mac = $request->mac;
        $infusion->laju_cairan = $request->laju_cairan;
        $infusion->volume_infus = $request->volume_infus;
        $infusion->save();

        return response()->json(['message' => 'Data saved successfully'], 200);
    }

    public function index()
        {
            // Mengambil semua data pasien dan hanya mengembalikan `mac` dan `target_tpm`
            $data = Patient::all()->map(function ($patient) {
                return [
                    'mac' => $patient->mac,
                    'target_tpm' => $patient->target_tpm
                ];
            });

            // Mengembalikan data dalam format JSON
            return response()->json($data);
        }
        

    // Tambahkan fungsi untuk GET jika diperlukan
}

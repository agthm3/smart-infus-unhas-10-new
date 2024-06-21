<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Infusion;
use App\Models\Patient;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mendapatkan semua data infus dengan volume_infus < 100
        $alertInfusions = Infusion::where('volume_infus', '<', 100)->get();
        $tpminfusion = Infusion::where('alert', 1)->get();

        // Membuat array untuk menyimpan data pasien dengan infus yang hampir habis
        $alertPatients = $alertInfusions->map(function ($infusion) {
            $patient = Patient::where('mac', $infusion->mac)->first();
            return [
                'infusion' => $infusion,
                'patient' => $patient
            ];
        });

        return view('dashboard.index', compact('alertPatients', 'tpminfusion'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}

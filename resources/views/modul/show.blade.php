@extends('layouts.app')
@section('content')
{{-- @dd($latestInfusion) --}}
<style>
    .big-number {
        font-size: 2.5rem; /* Large font size */
        font-weight: bold; /* Bold font for better visibility */
        display: flex;
        align-items: center; /* Center vertically */
        justify-content: center; /* Center horizontally */
        height: 100%; /* Take full height of the parent */
    }
</style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"><a href="{{ route('daftar-modul.index') }}">Daftar Modul/</a></span> Detail Modul
        </h4>
      

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Detail Modul</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Mac</label>
                                <div class="col-sm-10">
                                    <p class="form-control">{{$patient->mac}}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                                <div class="col-sm-10">
                                    <p class="form-control">{{$patient->nama}}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Jenis Infus</label>
                                <div class="col-sm-10">
                                    <p class="form-control">{{$patient->jenis_infus}}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Volume Infus</label>
                                <div class="col-sm-10">
                                    <p class="form-control">{{ $latestInfusion->volume_infus ?? 'No data' }}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Laju Cairan</label>
                                <div class="col-sm-10">
                                    <p class="form-control">{{ $latestInfusion->laju_cairan ?? 'No data' }}</p>
                                </div>
                            </div>
                  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

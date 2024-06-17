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
            <span class="text-muted fw-light"><a href="{{ route('daftar-pasien.index') }}">Daftar Pasien/</a></span> Detail
            Pasien
        </h4>
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-3">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body bg-danger text-white big-number">Volume Infus</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="big-number">
                                    {{ $latestInfusion ? $latestInfusion->volume_infus . 'ml' : 'No data' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-3">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body bg-primary text-white big-number">Laju Cairan</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="big-number">
                                    {{ $latestInfusion ? $latestInfusion->laju_cairan : 'No data' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Detail Pasien</h5>
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
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Nomor ID</label>
                                <div class="col-sm-10">
                                    <p class="form-control">{{$patient->nomor_id}}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <p class="form-control">{{$patient->jenis_kelamin}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Jenis Infus</label>
                                <div class="col-sm-10">
                                    <p class="form-control">{{$patient->jenis_infus}}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Jenis Penyakit</label>
                                <div class="col-sm-10">
                                    <p class="form-control">{{$patient->jenis_penyakit}}</p>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <a href="{{ route('edit-pasien.edit') }}" class="btn btn-primary">Edit</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

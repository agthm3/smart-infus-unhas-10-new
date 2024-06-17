@extends('layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"><a href="{{ route('daftar-pasien.index') }}">Daftar Pasien/</a></span> Edit Data Pasien
        </h4>

        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Pasien</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update-pasien', $patient->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" value="{{ $patient->nama }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Nomor ID</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nomor_id" value="{{ $patient->nomor_id }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <select name="jenis_kelamin" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                            <option value="Laki-laki" {{ $patient->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="Perempuan" {{ $patient->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Jenis Infus</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jenis_infus" value="{{ $patient->jenis_infus }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Jenis Penyakit</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jenis_penyakit" value="{{ $patient->jenis_penyakit }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

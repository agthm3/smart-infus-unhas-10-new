@extends('layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"><a href="{{ route('daftar-pasien.index') }}">Daftar Pasien/</a></span> Tambah
            Pasien
        </h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Detail Pasien</h5>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form method="POST" action="{{ route('patients.store') }}">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Nomor ID</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nomor_id" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <select class="form-select" name="jenis_kelamin" id="exampleFormControlSelect1"
                                            aria-label="Default select example">
                                            <option value="laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Jenis Infus</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jenis_infus" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Jenis Penyakit</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jenis_penyakit" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message"><strong>Target
                                        TPM</strong>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="target_tpm" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message"><strong>Mac</strong>
                                    Infus</label>
                                <div class="col-sm-10">
                                    <input type="text" name="mac" class="form-control" />
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

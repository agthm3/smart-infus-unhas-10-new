@extends('layouts.app')

@section('content')
{{-- @dd($tpminfusion) --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            @foreach ($tpminfusion as $item)
            {{-- @dd($item->patient) --}}
            <div class="col-lg-12 mb-4 order-0">
              <div class="card bg-danger text-white">
                  <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                          <div class="card-body ">
                              <h5 class="card-title text-primary">  
                                  <span><strong class="text-white">Peringatan!</strong></span>
                              </h5>
                              <p class="mb-4">Laju infus <strong>{{ $item->patient ? $item->patient->nama : 'Nama tidak ditemukan' }}</strong> tidak sesuai target</p>
                      
                            </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                          <div class="card-body pb-0 px-0 px-md-4">
                              <img src="../assets/img/illustrations/undraw_warning_re_eoyh.svg" height="140"
                                  alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                  data-app-light-img="illustrations/man-with-laptop-light.png" />
                          </div>
                      </div>
                  </div>
              </div>
          </div>
            @endforeach
          @foreach ($alertPatients as $item)
          <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">
                                <span><strong class="text-danger">Peringatan!</strong></span>
                            </h5>
                            <p class="mb-4">Infus Pasien <strong>{{ $item['patient'] ? $item['patient']->nama : 'Nama tidak ditemukan' }}</strong> hampir habis (Kurang 100ml)</p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/undraw_warning_re_eoyh.svg" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
          @endforeach
        </div>
    </div>
@endsection

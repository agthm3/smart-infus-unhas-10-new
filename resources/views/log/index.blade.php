@extends('layouts.app')
@section('content')

    <div class="container-xxl container-p-y">
        <div class="row">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Daftar Log</h5>
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mac</th>
                                <th>Laju Cairan</th>
                                <th>Volume Infus</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @foreach ($allLog as $item)
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->id}}</strong></td>
                            <td>{{$item->mac}}</td>
                            <td>{{$item->laju_cairan}}</td>
                            <td>{{$item->volume_infus}}</td>
                            <td>{{$item->created_at->format('d M Y')}}</td>

                       
                        </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->

            <hr class="my-5" />
        </div>
    </div>
@endsection

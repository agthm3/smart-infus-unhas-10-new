@extends('layouts.app')
@section('content')

    <div class="container-xxl container-p-y">
        <div class="row">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <h5 class="card-header">Daftar Pasien</h5>
                <div class="row">
                    <div class="col-lg-2">
                        <a href="{{ route('tambah-pasien.create') }}" class="form-control bg-primary text-white">+ Tambah
                            Pasien</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pasien</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @foreach ($allpasien as $item)
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->id}}</strong></td>
                            <td>{{$item->nama}}</td>

                            <td>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="{{ route('detail-pasien.show', $item) }}">
                                            <button class="form-control"><i class="bx bx-user"></i> Detail</button></a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="{{ route('edit-pasien.edit') }}"><button class="form-control"><i
                                                    class="bx bx-edit-alt"></i> Edit</button></a>
                                    </div>
                                    <div class="col-lg-4">
                                        <form action="{{route('destroy-pasien',$item)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="form-control bg-danger text-white">
                                            <i class="bx bx-trash"></i> Hapus
                                        </button>
                                        </form>
                                     
                                    </div>
                                </div>
                            </td>
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

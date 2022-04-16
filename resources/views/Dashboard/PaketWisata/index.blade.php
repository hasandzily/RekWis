@extends('Dashboard.layouts.main')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Paket Wisata</h1>
  </div>
  @if(session()->has('success'))
    <div class="alert alert-succces" role="alert" >
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive col-lg-8 d-inline">
    <a href="" class="btn btn-primary mb-3">Tambah paket</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Wisata</th>
          <th scope="col">Alamat</th>
          <th scope="col">Harga Tiket</th>
          <th scope="col">Telepon</th>
          <th scope="col">Rating</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($paketwisatas as $paket)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $paket->Nama Wisata }}</td>
          <td>{{ $paket->Alamat }}</td>
          <td>{{ $paket->Harga Tiket }}</td>
          <td>{{ $paket->Telepon }}</td>
          <td>{{ $paket->Rating }}</td>
          <td>
              <a href="/dashboard/paketWisata/{{ $paket->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
              <a href="" class="badge bg-danger"><span data-feather="trash-2"></span></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
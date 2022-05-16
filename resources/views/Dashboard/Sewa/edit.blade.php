@extends('Dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Sewa</h1>
    <a href="/dashboard/sewa" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
</div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/sewa/{{ $sewa->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama_hotel" class="form-label">Nama Hotel</label>
                <input type="text" class="form-control @error('nama_hotel') is-invalid @enderror" id="nama_hotel" name="nama_hotel" placeholder="Masukkan Hotel" required autofocus value="{{ old('nama_hotel', $sewa->nama_hotel) }}">
                @error('nama_hotel')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="text" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" placeholder="Masukkan Gambar" required autofocus value="{{ old('gambar', $sewa->image) }}">
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Masukkan Harga" required autofocus value="{{ old('harga', $sewa->harga) }}">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">rating</label>
                <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" placeholder="Masukkan Rating" required autofocus value="{{ old('rating', $sewa->rating) }}">
                @error('rating')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
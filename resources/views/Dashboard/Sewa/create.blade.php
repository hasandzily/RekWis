@extends('Dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Sewa</h1>
    <a href="/dashboard/sewa" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
</div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/sewa" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_hotel" class="form-label">Nama Hotel</label>
                <input type="text" class="form-control @error('nama_hotel') is-invalid @enderror" id="nama_hotel" name="nama_hotel" placeholder="Masukkan Hotel" required autofocus value="{{ old('nama_hotel') }}">
                @error('nama_hotel')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Masukkan Harga" required autofocus value="{{ old('harga') }}">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" placeholder="Masukkan Rating" required autofocus value="{{ old('rating') }}">
                @error('Rating')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
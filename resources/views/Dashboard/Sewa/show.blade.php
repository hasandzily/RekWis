@extends('Dashboard.layouts.main')

@section('content')
<div class="container d-flex flex-wrap justify-content-center m-auto">
    <section class="text-center">
      <br>
        <h4 class="mb-5"><strong>Sewa Hotel</strong></h4>

        <div class="row" >
          <div class="col-lg-4 col-md-12 mb-4" style="width: 30rem">
            <hr>
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">

                
                <img src="{{ asset('storage/' . $sewa->image) }}" class="img-fluid" />
                


                <a href="#">
                  <div class="mask" style="background-color: rgba(255, 255, 0, 0.15);"></div>
                </a>
              </div>
              <div class="card-body" style="background-color: rgba(255,253,208,1)">
                <h5 class="card-title">{{ $sewa->nama_hotel }}</h5>
                <p class="card-text">
                  Harga mulai dari {{ $sewa->harga }}
                </p>
                  <i class="bi bi-people-fill"></i> : {{ $sewa->rating }}
                </p>
                <p><a class="btn btn-primary" href="https://traveloka.com"> Contact Now!</a></p>
              </div>
            </div>
            <hr>
            <a href="/dashboard/sewa" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>

            <a href="/dashboard/sewa/{{ $sewa->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>

            <form action="/dashboard/sewa/{{ $sewa->id }}" method="post" class="d-inline">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger border-0" onclick="return confirm('Data akan dihapus!')"><span data-feather="trash-2"></span>Delete</button>
            </form>

          </div>
      </section>
</div>
@endsection
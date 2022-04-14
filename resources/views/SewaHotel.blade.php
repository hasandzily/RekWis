@extends('layout.main')

@section('title')
  Sewa Hotel
@endsection

<style>
  h1{
    font-size: 50px;
    font-family: 'Roboto', sans-serif;
  }
</style>
@section('content')
{{-- <header>

  >
    
  </div>
  <!-- Background image -->
</header>
  <!--Main layout-->
  <br>
  <br>
  <br> --}} 
  <div class="ma">
    <div class="text-center"> 
      <br>
      <h1>Hotel di Bandung</h1>
  </div>
          <div class="container">
          <div class="row" >
            <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('img/papandayann.jpg') }}" class="img-fluid" />
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h2 class="card-title">The Papandayan</h2>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <p class="card-text">
                  <p2><b>Alamat</b></p2>
                  <p>Jl. Gatot Subroto No.83, Malabar, Kec. Lengkong, Kota Bandung, Jawa Barat 40262</p>
                  <p3><b>Mulai dari</b></p3>
                  <p>Rp 1.417.878</p>
                  <p4><b>Telepon</b></p4>
                  <p>022-731-0799</p>
                  <p><b>Rating</b>
                    <br>4.6</br>
                  </p>
                  <a href="https://www.traveloka.com/en-id/hotel/indonesia/the-papandayan-hotel-280342" class="btn btn-primary">Pesan Melalui Traveloka</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('img/mercure.jpeg') }}" class="img-fluid" />
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h2 class="card-title">Grand Mercure</h2>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <p class="card-text">
                  <p2><b>Alamat</b></p2>
                  <p>Jl. Dr. Setiabudi No.269 275, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40154</p>
                  <p3><b>Mulai dari</b></p3>
                  <p>Rp 800.000</p>
                  <p4><b>Telepon</b></p4>
                  <p>022-8200-0000</p>
                  <p><b>Rating</b>
                    <br>4.6</br>
                  </p>
                  <a href="https://www.traveloka.com/en-id/hotel/indonesia/grand-mercure-bandung-setiabudi-1000000470466" class="btn btn-primary">Pesan Melalui Traveloka</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('img/sheraton.jpeg') }}" class="img-fluid" />
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h2 class="card-title">Sheraton</h2>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <p class="card-text">
                  <p2><b>Alamat</b></p2>
                  <p>Jl. Ir. H. Juanda No.390, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135</p>
                  <p3><b>Mulai dari</b></p3>
                  <p>Rp 1.210.000</p>
                  <p4><b>Telepon</b></p4>
                  <p>022-2500-303</p>
                  <p><b>Rating</b>
                    <br>4.6</br>
                  </p>
                    <a href="https://www.traveloka.com/en-th/hotel/indonesia/sheraton-bandung-hotel--towers-62293" class="btn btn-primary">Pesan Melalui Traveloka</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('img/pullman.jpeg') }}" class="img-fluid" />
                  <a href="/form-sewa">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h2 class="card-title">Pullman Grand</h2>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <p class="card-text">
                  <p2><b>Alamat</b></p2>
                  <p>Jl. Diponegoro No.27, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115</p>
                  <p3><b>Mulai dari</b></p3>
                  <p>Rp 1.188.000</p>
                  <p4><b>Telepon</b></p4>
                  <p>022-8603-8888</p>
                  <p><b>Rating</b>
                    <br>4.7</br>
                  </p>
                    <a href="https://www.traveloka.com/id-id/hotel/indonesia/pullman-bandung-grand-central-9000000890204" class="btn btn-primary">Pesan Melalui Traveloka</a>
                </div>
              </div>
            </div>
        </section>
  </div>
@endsection
@extends('layout.main')

@section('title')
  Paket Wisata
@endsection

@section('content')

  @include('layout.slide-rekomendasi')
  
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
{{-- <hr class="my-5" /> --}}

<div class="text-bold text-center mb-5">
  <h2>Destinasi Wisata</h2>
</div>

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded" width="300" height="200" src="{{ asset('img/dusun-bambu.jpg') }}"
        role="img" aria-label="Placeholder: 300x200" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Dusun Bambu</h2>
      <p1><b>Alamat</b></p1>
      <p>Jl. Kolonel Masturi KM. 11, Dusun Bambu Lembang, Kertawangi, Kec. Cisarua, Kabupaten Bandung Barat, Jawa Barat, Indonesia, 40551</p>
      <p2><b>Jam operasional</b></p2>
      <p>10.00 WIB - 20.00 WIB</p>
      <p3><b>Harga tiket masuk</b></p3>
      <p>Rp 50.000 - Rp 150.000</p>
      <p4><b>Telepon</b></p4>
      <p>0815-6380-8021</p>
      <p><b>Rating</b>
        <br>4.5</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli tiket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
    <img class="bd-placeholder-img rounded" width="300" height="200" src="{{ asset('img/lodge-maribaya.jpg') }}"
        role="img" aria-label="Placeholder: 300x200" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>The Lodge Maribaya</h2>
      <p1><b>Alamat</b></p1>
      <p>Jl. Maribaya No. 149/252, RT. 03 / RW. 15, Babakan Gentong, Cibodas, Lembang, Bandung Barat, Jawa Barat, Indonesia, 40391</p>
      <p2><b>Jam operasional</b></p2>
      <p>09.00 WIB - 17.00 WIB</p>
      <p3><b>Harga tiket masuk</b></p3>
      <p>Rp 50.000 - Rp 85.000</p>
      <p4><b>Telepon</b></p4>
      <p>0811-2264-808</p>
      <p><b>Rating</b>
        <br>4.3</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli tiket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded" width="300" height="200" src="{{ asset('img/kawah-putih.jpg') }}"
        role="img" aria-label="Placeholder: 300x200" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Kawah Putih</h2>
      <p1><b>Alamat</b></p1>
      <p>Jl. Raya Ciwidey Patengan KM. 11 Lebakmuncang Ciwidey, Sugihmukti, Pasirjambu, Bandung, Jawa Barat, Indonesia, 40972</p>
      <p2><b>Jam operasional</b></p2>
      <p>07.30 WIB - 16.00 WIB</p>
      <p3><b>Harga tiket masuk</b></p3>
      <p>Rp 28.000 - Rp 162.000</p>
      <p4><b>Telepon</b></p4>
      <p>0813-2373-9973</p>
      <p><b>Rating</b>
        <br>4.6</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli tiket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->

  </div><!-- /.row -->
  <br>
  <br>
  <div class="row">
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded" width="300" height="200" src="{{ asset('img/lereng-anteng.jpg') }}"
        role="img" aria-label="Placeholder: 300x200" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Lereng Anteng</h2>
      <p1><b>Alamat</b></p1>
      <p>Jl. Pagermaneuh RT. 03/07, Pagerwangi, Kabupaten Bandung Barat, Jawa Barat, Indonesia, 40391</p>
      <p2><b>Jam operasional</b></p2>
      <p>08.00 WIB - 23.00 WIB</p>
      <p3><b>Harga tiket masuk</b></p3>
      <p>Rp 50.000 - Rp 85.000</p>
      <p4><b>Telepon</b></p4>
      <p>0812-2322-2595</p>
      <p><b>Rating</b>
        <br>4.4</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli tiket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded" width="300" height="200" src="{{ asset('img/farmhouse-lembang.jpg') }}"
        role="img" aria-label="Placeholder: 300x200" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Farm House Lembang</h2>
      <p1><b>Alamat</b></p1>
      <p>Jl. Raya Lembang No.108, Gudangkahuripan, Lembang, Bandung Barat, Jawa Barat, Indonesia, 40391</p>
      <p2><b>Jam operasional</b></p2>
      <p>09.00 WIB - 18.00 WIB</p>
      <p3><b>Harga tiket masuk</b></p3>
      <p>Rp 30.000</p>
      <p4><b>Telepon</b></p4>
      <p>022-8278-2400</p>
      <p><b>Rating</b>
        <br>4.4</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli tiket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded" width="300" height="200" src="{{ asset('img/tangkuban-perahu.jpg') }}"
        role="img" aria-label="Placeholder: 300x200" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Tangkuban Perahu</h2>
      <p1><b>Alamat</b></p1>
      <p>Jl. Raya Tangkuban Parahu, Cicadas, Sagalaherang, Subang, Jawa Barat, Indonesia, 40391</p>
      <p2><b>Jam operasional</b></p2>
      <p>08.00 WIB - 17.00 WIB</p>
      <p3><b>Harga tiket masuk</b></p3>
      <p>Rp 20.000 - Rp 300.000</p>
      <p4><b>Telepon</b></p4>
      <p>022-8278-0654</p>
      <p><b>Rating</b>
        <br>4.5</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli tiket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  
  </div><!-- /.row -->
  <br>
  <br>
  <div class="row">
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded" width="300" height="200" src="{{ asset('img/sunrise-point.jpg') }}"
        role="img" aria-label="Placeholder: 300x200" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Sunrise Point Cukul</h2>
      <p1><b>Alamat</b></p1>
      <p>Jl. Cukul, Sukaluyu, Pangalengan, Bandung, Jawa Barat, Indonesia, 40378</p>
      <p2><b>Jam operasional</b></p2>
      <p>05.00 WIB - 18.00 WIB</p>
      <p3><b>Harga tiket masuk</b></p3>
      <p>Rp 10.000</p>
      <p4><b>Telepon</b></p4>
      <p>0853-2402-6324</p>
      <p><b>Rating</b>
        <br>4.6</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli tiket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded" width="300" height="200" src="{{ asset('img/tebing-keraton.jpg') }}"
        role="img" aria-label="Placeholder: 300x200" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Tebing Keraton</h2>
      <p1><b>Alamat</b></p1>
      <p>Jl. Ir. H. Djuanda No. 99, Kompleks Taman Hutan Raya, Lembang, Ciburial, Cimenyan, Bandung Barat, Jawa Barat, Indonesia, 40198</p>
      <p2><b>Jam operasional</b></p2>
      <p>08.00 WIB - 15.00 WIB</p>
      <p3><b>Harga tiket masuk</b></p3>
      <p>Rp 12.000</p>
      <p4><b>Telepon</b></p4>
      <p>022-2515-8950</p>
      <p><b>Rating</b>
        <br>4.5</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli tiket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded" width="300" height="200" src="{{ asset('img/dream-park.jpg') }}"
        role="img" aria-label="Placeholder: 300x200" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Dago Dream Park</h2>
      <p1><b>Alamat</b></p1>
      <p>Jl. Dago Giri Km. 2.2 Mekarwangi, Pagerwangi, Lembang, West Bandung Regency, West Java 40135</p>
      <p2><b>Jam operasional</b></p2>
      <p>08.00 WIB - 18.00 WIB</p>
      <p3><b>Harga tiket masuk</b></p3>
      <p>Rp 30.000 - Rp 100.000</p>
      <p4><b>Telepon</b></p4>
      <p>0812-2230-068</p>
      <p><b>Rating</b>
        <br>4.2</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli tiket &raquo;</a></p>
    </div>
  </div>
@endsection
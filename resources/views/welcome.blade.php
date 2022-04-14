@extends('layout.main')

@section('title')
  Welcome
@endsection

@section('content')
@include('layout.carousel')
<div class="container">
    <div class="row">
        <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                <img src="{{ asset('img/bumi-pasundan.jpg') }}" class="img-fluid" />
            <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            </div>
        </div>

        <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Bumi Pasundan</strong></h4>
            <p class="text-muted">
            "Bumi Pasundan lahir ketika Tuhan sedang tersenyum" — M.A.W Brouwer. 
            Demikian tulisan di dinding di bawah jembatan penyeberangan Jalan Asia Afrika Bandung.
            Dinding itu menjadi salah satu spot yang sering dijadikan latar untuk wisatawan berfoto.
            </p>
            <p><strong>...</strong></p>
            <p class="text-muted">
            Bumi Pasundan adalah tatar Sunda, wilayah Parahyangan, yang sekarang bernama Jawa Barat. 
            Keindahan alam Jawa Barat atau Bumi Pasundan mendorong M.A.W. 
            Brouwer mengatakan ungkapan populer: “Bumi Pasundan Lahir Ketika Tuhan Sedang Tersenyum“.
            </p>
        </div>
    </div>
</div>  
<div class="container relative mx-auto flex flex-col-reverse md:flex-row px-5 md:px-15 pt-5 md:pt-5 pb-5">
            <h3 class="font-bold text-2xl md:text-3xl mb-2 text-black">Tentang Kota Bandung</h3>
			<div class="mt-2 text-base md:text-2xl pb-5 text-justify text-black">
				<p>Kota Bandung dikelilingi oleh pegunungan, sehingga bentuk morfologi wilayahnya bagaikan sebuah mangkuk raksasa, secara geografis kota ini terletak di tengah-tengah provinsi Jawa Barat.</p>
                <p>Kota kembang merupakan sebutan lain untuk kota ini, karena pada zaman dulu kota ini dinilai sangat cantik dengan banyaknya pohon dan bunga-bunga yang tumbuh di sana. Selain itu Bandung dahulunya disebut juga dengan Paris van Java karena keindahannya. Selain itu kota Bandung juga dikenal sebagai kota belanja, dengan mall dan factory outlet yang banyak tersebar di kota ini, dan saat ini berangsur-angsur kota Bandung juga menjadi kota wisata kuliner.</p>
			</div>
		</div>
	</div>
</div>
<hr class="my-5" />
    <section class="text-center">
      <div class="container">
      <h1 class="mb-5"><strong>Event Bandung</strong></h1>
        <img src="{{ asset('img/3.png') }}" class="w-100" alt="" aria-controls="#picker-editor"> 

<hr class="my-5" />
    <section class="text-center">
      <div class="container">
    <h1 class="mb-5"><strong>Wisata Bandung</strong></h1>
    <div class="row gx-lg-5 align-items-center mb-5">
    <div class="col-md-6 mb-4 mb-md-0"> 
    <div class="bg-image hover-overlay ripple shadow-4-strong rounded-4 mb-4" data-mdb-ripple-color="light"> 
            <img src="{{ asset('img/lodge-maribaya.jpg') }}" class="w-100" alt="" aria-controls="#picker-editor"> 
        </div>
    </div> 
    <div class="col-md-6 mb-4 mb-md-0"> 
        <h3 class="fw-bold">The Lodge Maribaya</h3> 
            <p class="text-muted">The Lodge Maribaya adalah salah satu tempat wisata di Lembang yang menawarkan berbagai hal pada pengunjung. 
                Disini kita bisa melakukan berbagai akitivitas seperti camping, trekking mengelilingi area hutan pinus yang indah, 
                acara gathering dan team building, atau bahkan hanya sekedar refreshing menikmati kuliner.</p> 
    </div> 
    <div class="row gx-lg-5 align-items-center mb-5 flex-lg-row-reverse"> 
    <div class="col-md-6 mb-4 mb-md-0"> 
    <div class="bg-image hover-overlay ripple shadow-4-strong rounded-4 mb-4" data-mdb-ripple-color="light"> 
        <img src="{{ asset('img/kawah-putih.jpg') }}" class="w-100" alt="" aria-controls="#picker-editor"> 
    </div> 
    </div> 
    <div class="col-md-6 mb-4 mb-md-0"> 
        <h3 class="fw-bold">Kawah Putih</h3> 
    <div class="mb-2 text-primary small">
    </div> 
    <p class="text-muted">  Kawah Putih Ciwidey Bandung adalah primadona wisata di Bandung Selatan. Tempat yang sejuk ini sangat diminati oleh para wisatawan 
                yang berkunjung ke Ciwidey baik lokal maupun mancanegara dengan pemandangan yang tidak pernah bosan ketika 
                berada di tepi kawah dan satu-satunya kawah dimana kita bisa langsung ke pusat kawahnya dengan dilengkapi fasilitas seperti 
                Jembatan Ponton, Cantigi Sky Walk, Sunan Ibu dan spot sunrise sunan ibu seperti negeri diatas awan.</p> 
    </div> 
    <div class="row gx-lg-5 align-items-center mb-5">
    <div class="col-md-6 mb-4 mb-md-0"> 
    <div class="bg-image hover-overlay ripple shadow-4-strong rounded-4 mb-4" data-mdb-ripple-color="light"> 
            <img src="{{ asset('img/farmhouse-lembang.jpg') }}" class="w-100" alt="" aria-controls="#picker-editor"> 
        </div>
    </div> 
    <div class="col-md-6 mb-4 mb-md-0"> 
        <h3 class="fw-bold">Farm House Lembang</h3> 
            <p class="text-muted">Farm House Lembang yang sudah begitu terkenal bahkan menjadi destinasi favorit wisatawan.
                Objek wisata ini sangat cocok untuk pilihan liburan baik bersama teman maupun keluarga karena memiliki objek wisata menarik yang bisa tersedia untuk semua kalangan usia. 
                Tak heran, jika setiap weekend, tempat wisata ini selalu padat kunjungan.</p> 
    </div> 
    <div class="row align-items-end">
    <div class="col-md-12 text-center">
    <a href="/paketWisata" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Lihat Semua</a>
    </div>
</div>
@endsection
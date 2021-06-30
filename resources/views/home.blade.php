@extends('layouts.master')

@include('layouts.navigation')

@push('style')
	<style type="text/css">
		.my-active span{
			background-color: #5cb85c !important;
			color: white !important;
			border-color: #5cb85c !important;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush

@section('content')

<body>
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<!-- ***** Preloader End ***** -->


@extends('layouts.navigation')

    <!-- Page Content -->
    <div class="banner header-text mb-5">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h2>Temukan Mobil Terbaikmu</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h2>Tersedia banyak mobil keren yang bisa kamu rental</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h2>Ayo Pesan Sekarang Juga!</h2>
          </div>
        </div>
      </div>
    </div>


    
    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          {{ Breadcrumbs::render('home') }}
          <h2>MOBIL TERBARU</h2>
            <div class="section-heading">
              <a href="{{ route('daftarmobil') }}">Lihat Lebih banyak mobil <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          @foreach($mobil as $m)
          <div class="col-md-4">
            <div class="product-item">
              <a href="{{ route('daftarmobil') }}">
              <img src="/image/{{$m->image }}" alt=""></a>
              <div class="down-content">
              <h4>{{$m->name }}</h4>
                <h6><small>mulai</small> Rp {{$m->harga}} <small>per minggu</small></h6>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
     


    <section id="orang" class="orang">
      <div class="container">

        <div class="section-title">
          <h2>Anggota Kelompok 3</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('images/risky.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4 class="mt-5">Risky Saputra Siahaan</h4>
                <span>11320030</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('images/marchellya.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4 class="mt-5">Marchellya Lumban Gaol</h4>
                <span>11320045</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('images/agnes.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4 class="mt-5">Agnes Mebyolla Turnip</h4>
                <span>11320052</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('images/trito.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4 class="mt-5">Trito Manik</h4>
                <span>11320001</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('images/daffa.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4 class="mt-5">Daffa Naufal Lokananta</h4>
                <span>11320031</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('images/anggun.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4 class="mt-5">Anggun Napitupulu</h4>
                <span>11320056</span>
              </div>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End orang Section -->

          

          <!-- <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div> 

    <div class="col">
    <div class="d-flex justify-content-center">
    
    </div>
    </div>
    
    

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Kel 3</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
@endsection
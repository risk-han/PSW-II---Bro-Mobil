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
    <div class="banner header-text">
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

    <div class="products">
      <div class="container">
      <div class="col-md-8">
      {{ Breadcrumbs::render('mobils.index') }}
      </div>
      <div class="dropdown mr-1">
        <button type="button" class="btn btn-info dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
        URUTKAN BERDASARKAN
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
          <a class="dropdown-item">@sortablelink('harga', 'Harga')</a>
          <a class="dropdown-item">@sortablelink('stok', 'Jumlah Stok')</a>
          <a class="dropdown-item">@sortablelink('id', 'Terbaru')</a>
        </div>
        <div class="row mt-4">
        @foreach($mobil as $m)
          <div class="col-md-4">
            <div class="product-item">
              <img style="height: 250px;" src="/image/{{ $m->image }}" alt="">

              <div class="down-content">
                <h4>{{ $m->name }}</h4>

                <h6><small>mulai</small> Rp {{$m->harga}} <small>per minggu</small></h6>

                <p>{{ $m->detail }}</p>
                <small>
                    <strong title="passegengers">Stok = {{ $m->stok}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                </small>
                <span>
                  <a href="{{ route('mobils.show', $m->id) }}">Pesan Sekarang</a>
                </span>
              </div>
            </div>
          </div>
          @endforeach

          

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
    {!! $mobil->links() !!}
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
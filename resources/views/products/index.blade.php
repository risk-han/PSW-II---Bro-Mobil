@extends('layouts.master')

@extends('layouts.navigation')

@section('content')

@include('sweetalert::alert')

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

<!-- Header -->
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
<br>
<br>
<br>
<br>
    <div class="container">
    <div class="row">
    {{ Breadcrumbs::render('products') }}
        <div class="col-lg-12">
            <div class="pull-left">
                <h2 class="mt-5">ADMIN PANEL</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-primary mt-5" href="{{ route('chart') }}"><i class="fas fa-chart-bar"></i> Lihat Grafik User</a>
            </div>
        </div>
        <div>
          <a class="btn btn-primary mt-5" href="{{ route('products.create') }}"><i class="fas fa-plus"></i>  Tambah Mobil</a>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <table class="table table-bordered mt-5">
        <tr class="table table-primary">
            <th>@sortablelink('id', 'No')</th>
            <th>Image</th>
            <th>@sortablelink('name', 'Nama')</th>
            <th>@sortablelink('harga', 'Harga per Minggu')</th>
            <th>@sortablelink('stok', 'Stok')></th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->harga}}</td>
            <td>{{ $product->stok}}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-primary" href="{{ route('products.show',$product->id) }}"><i class="fas fa-eye"></i></a>
      
                    <a class="btn btn-success" href="{{ route('products.edit',$product->id) }}"><i class="fas fa-edit"></i></a>
                    @csrf
                    @method('DELETE')
                    <button href="#myModal" data-toggle="modal" type="submit" id="box" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    <div id="dialog-confirm"></div>
                </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>  
    <div class="d-flex justify-content-center">
    {!! $products->links() !!}
    </div>
    </div>  
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
@endsection
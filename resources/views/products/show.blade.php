@extends('layouts.master')

@include('layouts.navigation')

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

<!-- Header -->

<br>
<br>
<br>
<br>

    <br>
    <div class="container">
    <div class="row">
    {{ Breadcrumbs::render('products.show', $product) }}
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail {{ $product->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
            </div>
        </div>

    <br>
    <br> 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Mobil</strong>
                <br>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail Mobil</strong>
                <br>
                {{ $product->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok Mobil</strong>
                <br>
                {{ $product->stok }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Sewa</strong>
                <br>
                {{ $product->harga }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <br>
                <img src="/image/{{ $product->image }}" width="500px">
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
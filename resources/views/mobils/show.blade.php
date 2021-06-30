@extends('layouts.master')

@include('layouts.navigation')

@section('content')

<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="pull-left">
            {{ Breadcrumbs::render('mobils.show', $mobil) }}
                <h2 class="mt-3">Detail {{ $mobil->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="daftarmobil">Back</a>
            </div>
        </div>
    </div>

    <br>
    <br> 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Mobil</strong>
                <br>
                {{ $mobil->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail Mobil</strong>
                <br>
                {{ $mobil->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok Mobil</strong>
                <br>
                {{ $mobil->stok }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Sewa</strong>
                <br>
                {{ $mobil->harga }} per Minggu
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <br>
                <img src="/image/{{ $mobil->image }}" width="500px">
            </div>
        </div>
        <form action="{{ route('pembayaran.create', $mobil->id) }}" method="GET">
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success mt-2 mb-5" value="submit" >Lanjut Ke Halaman Pembayaran</button>
            </div>
        </form>
    </div>
    </div>


@endsection
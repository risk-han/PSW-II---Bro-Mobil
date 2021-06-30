@extends('layouts.master')

@include('layouts.navigation')

@section('content')

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

    <div class="container mt-5">
      <div class="col-md-12">
      <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('/pembayaran/show/pdf') }}">Download Pembayaran dalam PDF</a>
        </div>
        <div class="row">
      <table class="table table-striped">
        <th class="table-primary">Detail Pembayaran</th>
        <tr>
          <th>Nama Lengkap</th>
          <td>{{$payment->name}}</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>{{$payment->email}}</td>
        </tr>
        <tr>
          <th>Lokasi Penjemputan</th>
          <td>{!!$payment->lokasiawal!!}</td>
        </tr>
        <tr>
          <th>Lokasi Pengembalian</th>
          <td>{{$payment->lokasiakhir }}</td>
        </tr>
        <tr>
          <th>Pesan Khusus</th>
          <td>{{$payment->pesan }}</td>
        </tr>
        <tr>
          <th>Tanggal Peminjaman</th>
          <td>{{$payment->tanggalawal}}</td>
        </tr>
        <tr>
          <th>Tanggal Pengembalian</th>
          <td>{{$payment->tanggalakhir }}</td>
        </tr>
      </table>
      </div>
    </div>
    </div>

    <div class="container mt-5">
      <div class="col-md-12">
        <div class="row">
      <table class="table table-striped">
        <th class="table-primary">Detail Mobil</th>
        <tr>
          <th>Nama Mobil</th>
          <td>{{$product->name}}</td>
        </tr>
        <tr>
          <th>Deskripsi</th>
          <td>{{$product->detail}}</td>
        </tr>
        <tr>
          <th>Harga</th>
          <td>{{$product->harga}}</td>
        </tr>
      </table>
      </div>
    </div>
    <div class="form-group">
      <strong>Gambar Mobil</strong>
        <br>
      <img src="/image/{{ $product->image }}" width="500px">
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

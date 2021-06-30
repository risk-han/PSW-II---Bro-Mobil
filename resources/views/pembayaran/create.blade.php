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
    <br>
    <br>
    <br>
    <br>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="col-md-6 offset-md-3 mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Mohon Isi Form Pembayaran Anda</h3>
                            <hr>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Mohon maaf </strong>Tolong Perbaiki Detail Pemesanan anda.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('pembayaran.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input name="name" type="text" placeholder="Nama Lengkap" class="form-control" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="text" placeholder="Isi Email Anda" class="form-control" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label>Lokasi Penjemputan</label>
                                    <input name="lokasiawal" type="text" placeholder="Lokasi Penjemputan" class="form-control" value="{{ old('lokasiawal') }}">
                                </div>
                                <div class="form-group">
                                    <label>Lokasi Pengembalian</label>
                                    <input name="lokasiakhir" type="text" placeholder="Lokasi Pengembalian" class="form-control" value="{{ old('lokasiakhir') }}">
                                </div>
                                <div class="form-group">
                                    <label>Pesan Khusus</label>
                                    <textarea name="pesan" placeholder="Pesan Khusus" style="height: 150px;" class="form-control">{{ old('pesan') }}</textarea>
                                </div>
                                <div class="form">
                                    <label>Tanggal Peminjaman</label>
                                    <input type="date" placeholder="Tanggal Peminjaman" name="tanggalawal" class="form-control" value="{{ old('tanggalawal') }}">
                                </div>
                                <div class="form">
                                    <label>Tanggal Pengembalian</label>
                                    <input type="date" placeholder="Nama Tanggal Pengembalian" name="tanggalakhir" class="form-control" value="{{ old('tanggalakhir') }}">
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <a href="{{ route('mobils.index') }}" class="btn btn-lg btn-danger">Batal</a>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
<script>

</script>
@extends('layouts.master')

@extends('layouts.navigation')

@section('content')

<body>

<!-- ***** Preloader Start ***** -->
<!-- ***** Preloader End ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div> 
<!-- Header -->


<br>
<br>
<br>
<br>
<div class="container">
<div class="row">
{{ Breadcrumbs::render('products.create') }}
    <div class="col-lg-12">
            <h2>Tambah Mobil Baru</h2>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail" value="{{ old('detail') }}"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="number" class="form-control" name="harga" placeholder="Harga" value="{{ old('harga') }}"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok:</strong>
                <input type="number" class="form-control" name="stok" placeholder="Stok" value="{{ old('stok') }}"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" value="{{ old('stok') }}" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
</div>
    @include('layouts.footer')
</body>
</form>
@endsection
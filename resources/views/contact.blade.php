@extends('layouts.master')

@include('layouts.navigation')

@section('content')
<body style="background-color: #cdf7f2;">

<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div> 

@extends('layouts.navigation')
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
        <div class="row">
        {{ Breadcrumbs::render('contact') }}
                <div class="col-lg-12">
                    <h2>FORM SARAN</h2>
                    <p>Berikan saran anda Untuk Perbaikan<br>Kami kedepannya</p>
                    <a class="mt-3 mb-3 btn btn-primary" href="/">Kembali</a>

                    @if(Session::has('status'))
                    <div class="alert alert-success">{{ Session::get('status') }}</div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif

                    <form action="{{route('captcha-validation')}}" method="post">

                        {{ csrf_field() }}

                        <label for="name">Nama</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="nama anda"/>
                        
                        <label for="email">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="alamat email anda"/>
                        
                        <label for="message">Message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="" placeholder="pesan anda" cols="30" rows="10"></textarea>

                        <div class="form-group mt-4 mb-4">
                            <div class="captcha ">
                                <span>{!! captcha_img() !!}</span>
                                <button type="button" class="btn btn-primary" class="reload" id="reload">
                                    ↻
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <input id="captcha" type="text" class="form-control @error('email') is-invalid @enderror mb-2" placeholder="Masukkan kode captcha" name="captcha">
                        </div>

                        <br><br>

                        <button type="submit" class="btn btn-success btn-lg">Send</button>
                    <form>
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

</body>

<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>


@endsection
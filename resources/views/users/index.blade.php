@extends('layouts.master')

@extends('layouts.navigation')

@section('content')

@include('sweetalert::alert')

<body>
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
</body>
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

    <div class="container">
        <div class="row">
            <div class="col">
              <div class="col-md-8 mt-5">
              {{ Breadcrumbs::render('user') }}
              </div>
                <div class="pull-right">
                    <a class="btn btn-primary mt-5 mb-5" href="{{ route('chart') }}"><i class="fas fa-chart-bar"></i> Lihat Grafik User</a>
                    <a class="btn btn-primary text-center" href="{{ route('excel') }}">Export ke Excel</a>
                </div>
                <div class="pull-left">
                  <a class="btn btn-primary mt-5 mb-5" href="{{ route('search.index') }}">Cari User?</a>
                </div>
                <div class="pull-left">
                </div>
                <table class="table table-bordered mt-5 mb-5">
                <tr class="table table-primary">
                    <th>Nomor</th>
                    <th>@sortablelink('name', 'Nama')</th>
                    <th>@sortablelink('email', 'Email')</th>
                    <th>@sortablelink('created_at', 'Tanggal Bergabung')</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach ($users as $u)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->created_at->format('d/m/Y') }}</td>
                    <td>
                    <form action="{{route('users.destroy', $u->id) }}">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </form>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {!! $users->links() !!}
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

<script type="text/javascript">

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $('#inputSearch').on('keyup', function(){
        $inputSearch = $(this).val();
        if($inputSearch == ''){
          $('#searchResult').html('');
          $('#searchResult').hide();
        }else{
          $.ajax({
            method: "post",
            url: 'search',
            data:JSON.stringify({
              inputSearch:$inputSearch
            }),
            headers :{
              'Accept' : 'application/json',
              'Content-Type' : 'application/json'
            },
            success: function(data){
              var searchResultAjax = ''
              data = JSON.parse(data);
              console.log(data);
              $('#searchResult').show();
              for(let i=0;i<data.length;i++){
                searchResultAjax += '<td>{{ ++$i }}</td>' +
                    '<td>{{ $u->name }}</td>' +
                    '<td>{{ $u->email }}</td>' +
                    '<td>{{ $u->created_at }} </td>'
              }
              $('#searchResult').html(searchResultAjax);
            }
          })
        }
    })
</script>

@endsection
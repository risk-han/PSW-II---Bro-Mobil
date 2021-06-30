@extends('layouts.master')

@include('layouts.navigation')
<script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
<body>
<style>
  *{
    font-size: 1.75rem;
  }
</style>
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

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

<div class="container">
{{ Breadcrumbs::render('search') }}
    <div>
      <div class="pull-right">
          <a class="btn btn-primary" href="{{ url()->previous() }}"><i class="fas fa-long-arrow-alt-left"></i>  Kembali</a>
        </div>
        <div class="col-md-12">
          <table id="laravel_crud" class="table mb-5">
            <thead>
                <tr class="table table-primary">
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Bergabung pada</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $u)
                <tr id="row_{{$u->id}}">
                   <td>{{ $u->name  }}</td>
                   <td>{{ $u->email }}</td>
                   <td>{{ $u->created_at->format('d/m/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
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

<script>
  $('#laravel_crud').DataTable();

  function addPost() {
    $("#post_id").val('');
    $('#post-modal').modal('show');
  }

  function editPost(event) {
    var id  = $(event).data("id");
    let _url = `/posts/${id}`;
    $('#titleError').text('');
    $('#descriptionError').text('');
    
    $.ajax({
      url: _url,
      type: "GET",
      success: function(response) {
          if(response) {
            $("#post_id").val(response.id);
            $("#title").val(response.title);
            $("#description").val(response.description);
            $('#post-modal').modal('show');
          }
      }
    });
  }

  function createPost() {
    var title = $('#title').val();
    var description = $('#description').val();
    var id = $('#post_id').val();

    let _url     = `/posts`;
    let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: _url,
        type: "POST",
        data: {
          id: id,
          title: title,
          description: description,
          _token: _token
        },
        success: function(response) {
            if(response.code == 200) {
              if(id != ""){
                $("#row_"+id+" td:nth-child(2)").html(response.data.title);
                $("#row_"+id+" td:nth-child(3)").html(response.data.description);
              } else {
                $('table tbody').prepend('<tr id="row_'+response.data.id+'"><td>'+response.data.id+'</td><td>'+response.data.title+'</td><td>'+response.data.description+'</td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
              }
              $('#title').val('');
              $('#description').val('');

              $('#post-modal').modal('hide');
            }
        },
        error: function(response) {
          $('#titleError').text(response.responseJSON.errors.title);
          $('#descriptionError').text(response.responseJSON.errors.description);
        }
      });
  }

  function deletePost(event) {
    var id  = $(event).data("id");
    let _url = `/posts/${id}`;
    let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: _url,
        type: 'DELETE',
        data: {
          _token: _token
        },
        success: function(response) {
          $("#row_"+id).remove();
        }
      });
  }

</script>

</html>
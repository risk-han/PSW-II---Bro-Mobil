<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style type="text/css">
        *{
          background-color: #ccffff;
        }
        .styled-table {
            border-collapse: collapse;
            margin: 35px 0;
            font-size: 1.2em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .styled-table  tr {
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
    </style>
<body>
<h2>Detail Pembayaran</h2>

<table class="styled-table" style="width:100%" style="text-align: center;">
  <tr>
    <th>Nama Lengkap</th>
    <td>{{ $payment->name }}</td>
  </tr>
  <br>
  <tr>
    <th>Email</th>
    <td>{{ $payment->email }}</td>
  </tr>
  <br>
  <tr>
    <th>Lokasi Penjemputan</th>
    <td>{{$payment->lokasiawal }}</td>
  </tr>
  <br>
  <tr>
    <th>Lokasi Pengembalian</th>
    <td>{{$payment->lokasiakhir }}</td>
  </tr>
  <br>
  <tr>
    <th>Pesan Khusus</th>
    <td>{{$payment->pesan }}</td>
  </tr>
  <br>
  <tr>
    <th>Tanggal Peminjaman</th>
    <td>{{$payment->tanggalawal }}</td>
  </tr>
  <br>
  <tr>
    <th>Tanggal Pengembalian</th>
    <td>{{$payment->tanggalakhir }}</td>
  </tr>
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
  <br>
</table>

</body>
</html>
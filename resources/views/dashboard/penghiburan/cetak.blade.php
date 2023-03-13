<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/cetak.css">
  <style>
    table.static {
      position: relative;
      border: 1px solid #000;
    }

    .mengetahui {
      margin-top: 15px;
      text-align: center;
      /* margin-left: 700px; */
    }

    .ttd {
      height: 50px;
      width: 50px;
    }
  </style>
  <title>GESBA | Dashboard</title>
</head>
<body>
  <div class="form-group">
    <h1 align="center">Data Penghiburan</h1>
    <table class="static" align="center" rules="all" border="1px" style="width: 95%">
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Anda</th>
        <th scope="col">Email</th>
        <th scope="col">No. HP / Whatsapp</th>
        <th scope="col">Nama Orang yang Meninggal Dunia</th>
        <th scope="col">Hubungan Anda dengan Orang Tersebut</th>
        <th scope="col">Tanggal dan Waktu Penguburan</th>
        <th scope="col">Lokasi Penguburan</th>
      </tr>
      @foreach ($penghiburan as $penghiburans)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $penghiburans->name }}</td>
          <td>{{ $penghiburans->email }}</td>
          <td>{{ $penghiburans->phone }}</td>
          <td>{{ $penghiburans->who_died }}</td>
          <td>{{ $penghiburans->relationship }}</td>
          <td>{{ $penghiburans->date_time }}</td>
          <td>{{ $penghiburans->location }}</td>
        </tr>
        @endforeach
    </table>
  </div>

  <div class="mengetahui">
    Malinau, {{ date('d M Y') }}<br>
    Koordinator Sosial dan Diakonia<br>
    <img src="../../ttd.png" alt="" class="ttd"><br>
    <b>Rispan</b>
  </div>

<script type="text/javascript">
  window.print();
</script>
</body>
</html>
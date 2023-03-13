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
    <h1 align="center">Data Penyerahan Anak</h1>
    <table class="static" align="center" rules="all" border="1px" style="width: 95%">
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Nama Ayah</th>
        <th scope="col">Nama Ibu</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">No. HP / Whatsapp</th>
        <th scope="col">Email</th>
        <th scope="col">Alamat Lengkap</th>
      </tr>
      @foreach ($penyerahananak as $penyerahananaks)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $penyerahananaks->fullname }}</td>
          <td>{{ $penyerahananaks->fathername }}</td>
          <td>{{ $penyerahananaks->mothername }}</td>
          <td>{{ $penyerahananaks->gender }}</td>
          <td>{{ $penyerahananaks->place_of_birth }}</td>
          <td>{{ $penyerahananaks->birth_day }}</td>
          <td>{{ $penyerahananaks->phone }}</td>
          <td>{{ $penyerahananaks->email }}</td>
          <td>{{ $penyerahananaks->address }}</td>
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
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
    <h1 align="center">Data Pemberkatan Nikah</h1>
    <table class="static" align="center" rules="all" border="1px" style="width: 95%">
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Mempelai Pria</th>
        <th scope="col">Nama Mempelai Wanita</th>
        <th scope="col">Status Mempelai Pria</th>
        <th scope="col">Status Mempelai Wanita</th>
        <th scope="col">Tanggal Pernikahan</th>
        <th scope="col">No. HP / Whatsapp Mempelai Pria</th>
        <th scope="col">No. HP / Whatsapp Mempelai Wanita</th>
        <th scope="col">Email Mempelai Pria</th>
        <th scope="col">Email Mempelai Wanita</th>
        <th scope="col">Alamat Lengkap Mempelai Pria</th>
        <th scope="col">Alamat Lengkap Mempelai Wanita</th>
      </tr>
      @foreach ($pemberkatannikah as $pemberkatannikahs)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $pemberkatannikahs->grooms_name }}</td>
          <td>{{ $pemberkatannikahs->brides_name }}</td>
          <td>{{ $pemberkatannikahs->status_grooms }}</td>
          <td>{{ $pemberkatannikahs->status_brides }}</td>
          <td>{{ $pemberkatannikahs->date_wedding }}</td>
          <td>{{ $pemberkatannikahs->phone_grooms }}</td>
          <td>{{ $pemberkatannikahs->phone_brides }}</td>
          <td>{{ $pemberkatannikahs->email_grooms }}</td>
          <td>{{ $pemberkatannikahs->email_brides }}</td>
          <td>{{ $pemberkatannikahs->address_grooms }}</td>
          <td>{{ $pemberkatannikahs->address_brides }}</td>
        </tr>
        @endforeach
    </table>
  </div>

  <div class="mengetahui">
    Malinau, {{ date('d M Y') }}<br>
    Bidang Pernikahan (BPPN)<br>
    <img src="../../ttd.png" alt="" class="ttd"><br>
    <b>Rispan</b>
  </div>

<script type="text/javascript">
  window.print();
</script>
</body>
</html>
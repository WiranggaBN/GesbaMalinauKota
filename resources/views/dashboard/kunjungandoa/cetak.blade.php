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
    <h1 align="center">Data Kunjungan Doa</h1>
    <table class="static" align="center" rules="all" border="1px" style="width: 95%">
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Ditujukan untuk?</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">No. HP / Whatsapp</th>
        <th scope="col">Email</th>
        <th scope="col">Jenis Pelayanan</th>
        <th scope="col">Tanggal dan Waktu Doa</th>
        <th scope="col">Detail / Pokok Doa</th>
        <th scope="col">Pesan</th>
      </tr>
      @foreach ($kunjungandoa as $kunjungandoas)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $kunjungandoas->diminta_oleh }}</td>
        <td>{{ $kunjungandoas->fullname }}</td>
        <td>{{ $kunjungandoas->gender }}</td>
        <td>{{ $kunjungandoas->phone }}</td>
        <td>{{ $kunjungandoas->email }}</td>
        <td>{{ $kunjungandoas->type_of_service }}</td>
        <td>{{ $kunjungandoas->pray_day }}</td>
        <td>{{ $kunjungandoas->detail }}</td>
        <td>{{ $kunjungandoas->message }}</td>
        </tr>
        @endforeach
    </table>
  </div>

  <div class="mengetahui">
    Malinau, 
    <?php
    function translate_month($date_str) {
        $en_months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $id_months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        return str_replace($en_months, $id_months, $date_str);
    }
    $date_str = date('d F Y');
    $date_str_id = translate_month($date_str);
    echo $date_str_id;
    ?>
    <br>
    Koordinator Sosial dan Diakonia<br>
    <img src="../../ttd.png" alt="" class="ttd"><br>
    <b>Rispan</b>
  </div>

<script type="text/javascript">
  window.print();
</script>
</body>
</html>
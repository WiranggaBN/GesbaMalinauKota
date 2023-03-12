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
    <h1 align="center">Data Baptisan</h1>
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
      @foreach ($baptisan as $baptisans)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $baptisans->fullname }}</td>
          <td>{{ $baptisans->fathername }}</td>
          <td>{{ $baptisans->mothername }}</td>
          <td>{{ $baptisans->gender }}</td>
          <td>{{ $baptisans->place_of_birth }}</td>
          <td>{{ $baptisans->birth_day }}</td>
          <td>{{ $baptisans->phone }}</td>
          <td>{{ $baptisans->email }}</td>
          <td>{{ $baptisans->address }}</td>
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




















{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GESBA | Dashboard</title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

  
</head>
<body>
  <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Baptisan</h1>
</div>

<div class="col-6">
  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
</div>

<div class="table-responsive col-lg-12">
    <table class="table table-striped table-sm border-2">
      <thead>
        <tr>
          <th scope="col">#</th>
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
      </thead>
      <tbody>
        @foreach ($baptisan as $baptisans)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $baptisans->fullname }}</td>
          <td>{{ $baptisans->fathername }}</td>
          <td>{{ $baptisans->mothername }}</td>
          <td>{{ $baptisans->gender }}</td>
          <td>{{ $baptisans->place_of_birth }}</td>
          <td>{{ $baptisans->birth_day }}</td>
          <td>{{ $baptisans->phone }}</td>
          <td>{{ $baptisans->email }}</td>
          <td>{{ $baptisans->address }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  
</body>
</html> --}}




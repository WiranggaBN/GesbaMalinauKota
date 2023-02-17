@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hubungi Kami</h1>
    </div>

    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">No. HP / Whatsapp</th>
              <th scope="col">Email</th>
              <th scope="col">Pesan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($hubungikami as $hubungikamis)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $hubungikamis->name }}</td>
              <td>{{ $hubungikamis->alamat }}</td>
              <td>{{ $hubungikamis->telp }}</td>
              <td>{{ $hubungikamis->email }}</td>
              <td>{{ $hubungikamis->pesan }}</td>
              <td>
                <a href="/dashboard/hubungikami/{{ $hubungikamis->name }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></i></a>
                <a href="" class="badge bg-danger"><i class="bi bi-x-square"></i></i></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection
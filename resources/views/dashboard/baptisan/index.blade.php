@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Baptisan</h1>
    </div>

    <div class="table-responsive col-lg-10">
        <table class="table table-striped table-sm">
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
              <th scope="col">Action</th>
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
              <td>
                <a href="/dashboard/baptisan/{{ $baptisans->fullname }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></i></a>
                <a href="" class="badge bg-danger"><i class="bi bi-x-square"></i></i></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection
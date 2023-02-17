@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-9">
            <a href="/dashboard/baptisan" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/baptisan" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            <a href="/dashboard/baptisan" class="btn btn-primary"><i class="bi bi-x-square"></i></i> Hapus</a>

            <div class="table-responsive col-lg-12 mt-4">
                <table class="table table-striped table-sm border-dark">
                  <thead class="bg-dark text-white">
                    <tr>
                      {{-- <th scope="col">#</th> --}}
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
                    <tr>
                      <td>{{ $baptisan->fullname }}</td>
                      <td>{{ $baptisan->fathername }}</td>
                      <td>{{ $baptisan->mothername }}</td>
                      <td>{{ $baptisan->gender }}</td>
                      <td>{{ $baptisan->place_of_birth }}</td>
                      <td>{{ $baptisan->birth_day }}</td>
                      <td>{{ $baptisan->phone }}</td>
                      <td>{{ $baptisan->email }}</td>
                      <td>{{ $baptisan->address }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</div>


@endsection
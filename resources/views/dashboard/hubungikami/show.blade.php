@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-9">
            <a href="/dashboard/hubungikami" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/hubungikami" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            <a href="/dashboard/hubungikami" class="btn btn-primary"><i class="bi bi-x-square"></i></i> Hapus</a>

            <div class="table-responsive col-lg-8 mt-4">
                <table class="table table-striped table-sm border-dark">
                  <thead class="bg-dark text-white">
                    <tr>
                      {{-- <th scope="col">#</th> --}}
                      <th scope="col">Nama</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">No. HP / Whatsapp</th>
                      <th scope="col">Email</th>
                      <th scope="col">Pesan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ $hubungikami->name }}</td>
                      <td>{{ $hubungikami->alamat }}</td>
                      <td>{{ $hubungikami->telp }}</td>
                      <td>{{ $hubungikami->email }}</td>
                      <td>{{ $hubungikami->pesan }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</div>


@endsection
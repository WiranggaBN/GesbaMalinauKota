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
                        <th scope="col">Nama Anda</th>
                        <th scope="col">Email</th>
                        <th scope="col">No. HP / Whatsapp</th>
                        <th scope="col">Nama Orang yang Meninggal Dunia</th>
                        <th scope="col">Hubungan Anda dengan Orang Tersebut</th>
                        <th scope="col">Tanggal dan Waktu Penguburan</th>
                        <th scope="col">Lokasi Penguburan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{ $penghiburan->name }}</td>
                        <td>{{ $penghiburan->email }}</td>
                        <td>{{ $penghiburan->phone }}</td>
                        <td>{{ $penghiburan->who_died }}</td>
                        <td>{{ $penghiburan->relationship }}</td>
                        <td>{{ $penghiburan->date_time }}</td>
                        <td>{{ $penghiburan->location }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</div>


@endsection
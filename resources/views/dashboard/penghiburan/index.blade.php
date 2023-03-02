@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Penghiburan</h1>
    </div>

    <div class="table-responsive col-lg-12">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Anda</th>
              <th scope="col">Email</th>
              <th scope="col">No. HP / Whatsapp</th>
              <th scope="col">Nama Orang yang Meninggal Dunia</th>
              <th scope="col">Hubungan Anda dengan Orang Tersebut</th>
              <th scope="col">Tanggal dan Waktu Penguburan</th>
              <th scope="col">Lokasi Penguburan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
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
              <td>
                <a href="/dashboard/penghiburan/{{ $penghiburans->name }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></i></a>
                <a href="" class="badge bg-danger"><i class="bi bi-x-square"></i></i></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection
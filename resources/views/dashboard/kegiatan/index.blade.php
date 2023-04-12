@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kegiatan</h1>
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
        <a href="/dashboard/kegiatan/create" class="btn text-light mb-3">Tambah Kegiatan</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Slug</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Pembicara</th>
              <th scope="col">Hari</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Waktu</th>
              <th scope="col">Gambar</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kegiatan as $kegiatans)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $kegiatans->title }}</td>
              <td>{{ $kegiatans->slug }}</td>
              <td>{{ $kegiatans->desc }}</td>
              <td>{{ $kegiatans->speaker }}</td>
              <td>{{ $kegiatans->month }}</td>
              <td>{{ $kegiatans->date }}</td>
              <td>{{ $kegiatans->time }}</td>
              <td><img class="col-sm-5" src={{ asset('storage/' . $kegiatans->image) }} alt=""></td>
              <td>
                <a href="/dashboard/kegiatan/{{ $kegiatans->slug }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                <a href="/dashboard/kegiatan/{{ $kegiatans->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard/kegiatan/{{ $kegiatans->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin Menghapus?')">
                    <i class="bi bi-x-square"></i>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection
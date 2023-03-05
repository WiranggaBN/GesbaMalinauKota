@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ibadah Persekutuan</h1>
    </div>

    <div class="col-6">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    </div>

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/ibadahpersekutuan/create" class="btn text-light mb-3">Tambah Ibadah Persekutuan</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Pembicara</th>
              <th scope="col">Tema</th>
              <th scope="col">Hari Tanggal</th>
              <th scope="col">Waktu</th>
              <th scope="col">Tempat</th>
              <th scope="col">Alamat</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($ibadahpersekutuan as $ibadahpersekutuans)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $ibadahpersekutuans->speaker }}</td>
              <td>{{ $ibadahpersekutuans->theme }}</td>
              <td>{{ $ibadahpersekutuans->date }}</td>
              <td>{{ $ibadahpersekutuans->time }}</td>
              <td>{{ $ibadahpersekutuans->place }}</td>
              <td>{{ $ibadahpersekutuans->address }}</td>
              <td>
                <a href="/dashboard/ibadahpersekutuan/{{ $ibadahpersekutuans->theme }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                <a href="/dashboard/ibadahpersekutuan/{{ $ibadahpersekutuans->theme }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard/ibadahpersekutuan/{{ $ibadahpersekutuans->theme }}" method="post" class="d-inline">
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
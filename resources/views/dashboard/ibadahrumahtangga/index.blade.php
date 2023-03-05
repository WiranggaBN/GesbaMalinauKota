@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ibadah Rumah Tangga</h1>
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
        <a href="/dashboard/ibadahrumahtangga/create" class="btn text-light mb-3">Tambah Ibadah Rumah Tangga</a>
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
            @foreach ($ibadahrumahtangga as $ibadahrumahtanggas)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $ibadahrumahtanggas->speaker }}</td>
              <td>{{ $ibadahrumahtanggas->theme }}</td>
              <td>{{ $ibadahrumahtanggas->date }}</td>
              <td>{{ $ibadahrumahtanggas->time }}</td>
              <td>{{ $ibadahrumahtanggas->place }}</td>
              <td>{{ $ibadahrumahtanggas->address }}</td>
              <td>
                <a href="/dashboard/ibadahrumahtangga/{{ $ibadahrumahtanggas->theme }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                <a href="/dashboard/ibadahrumahtangga/{{ $ibadahrumahtanggas->theme }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard/ibadahrumahtangga/{{ $ibadahrumahtanggas->theme }}" method="post" class="d-inline">
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
@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ulang Tahun</h1>
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
        <a href="/dashboard/ulangtahun/create" class="btn text-light mb-3">Tambah Ulang Tahun</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Slug</th>
              <th scope="col">Gambar</th>
              <th scope="col">Hari Ulang Tahun</th>
              <th scope="col">Pasal Alkitab</th>
              <th scope="col">Ayat Alkitab</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($ulangtahun as $ulangtahuns)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $ulangtahuns->name }}</td>
              <td>{{ $ulangtahuns->slug }}</td>
              <td><img class="col-sm-5" src={{ asset('storage/' . $ulangtahuns->image) }} alt=""></td>
              <td>{{ $ulangtahuns->datetime }}</td>
              <td>{{ $ulangtahuns->biblechapter }}</td>
              <td>{{ $ulangtahuns->bibleverses }}</td>
              <td>
                <a href="/dashboard/ulangtahun/{{ $ulangtahuns->slug }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                <a href="/dashboard/ulangtahun/{{ $ulangtahuns->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard/ulangtahun/{{ $ulangtahuns->slug }}" method="post" class="d-inline">
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
@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ringkasan Khotbah</h1>
    </div>

    <div class="col-6">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      {{-- @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif --}}
    </div>

    <div class="table-responsive col-lg-12">
      <a href="/dashboard/posts/create" class="btn text-light mb-3">Tambah Ringkasan Khotbah</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Slug</th>
              <th scope="col">Hari Tanggal</th>
              <th scope="col">Ayat Pokok</th>
              <th scope="col">Pembicara</th>
              <th scope="col">Kutipan</th>
              <th scope="col">Isi</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->slug }}</td>
              <td>{{ $post->date }}</td>
              <td>{{ $post->main_verse }}</td>
              <td>{{ $post->speaker }}</td>
              <td>{{ $post->excerpt }}</td>
              <td>{{ $post->body }}</td>
              <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
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
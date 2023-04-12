@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/ulangtahun" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/ulangtahun/{{ $ulangtahun->slug }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            <form action="/dashboard/ulangtahun/{{ $ulangtahun->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-primary" onclick="return confirm('Yakin Menghapus?')">
                <i class="bi bi-x-square"></i> Hapus
              </button>
            </form>

            <div class="card mb-3 me-3 mt-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('storage/' . $ulangtahun->image) }}" class="gambarultah img-fluid rounded-start" alt="..." >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title">{{ $ulangtahun->name }}
                      </h3>
                      <h5 class="card-title">{{ $ulangtahun->datetime }}
                      </h5>
                      <p class="card-text">{{ $ulangtahun->biblechapter }} <br> {{ $ulangtahun->bibleverses }}</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>


@endsection
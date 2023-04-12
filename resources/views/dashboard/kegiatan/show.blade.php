@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/kegiatan" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/kegiatan/{{ $kegiatan->slug }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            <form action="/dashboard/kegiatan/{{ $kegiatan->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-primary" onclick="return confirm('Yakin Menghapus?')">
                <i class="bi bi-x-square"></i> Hapus
              </button>
            </form>

            <div class="mt-3">
                <h5>{{ $kegiatan->title }}</h5>
                <span>{{ $kegiatan->desc }}</span>
                <p class="text-light">{{ $kegiatan->speaker }}</p>
                <h6>{{ $kegiatan->month }}</h6>
                <h4>{{ $kegiatan->date }}</h4>
                <h6>{{ $kegiatan->time }} WITA</h6>
           </div>
        </div>
    </div>
</div>


@endsection
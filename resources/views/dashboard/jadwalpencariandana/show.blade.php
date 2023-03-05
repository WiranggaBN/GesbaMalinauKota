@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/jadwalpencariandana" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/jadwalpencariandana/{{ $jadwalpencariandana->date }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            <form action="/dashboard/jadwalpencariandana/{{ $jadwalpencariandana->date }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-primary" onclick="return confirm('Yakin Menghapus?')">
                <i class="bi bi-x-square"></i> Hapus
              </button>
            </form>

            <div class="row mt-3">
                <div class="col-md-12">
                  <div class="card-jadwalpencariandana">
                    <p class="mt-3"><i class="bi bi-calendar-event"></i> {{ $jadwalpencariandana->date }}</p>                
                    <p class="mt-3"><i class="bi bi-clock"></i> Pukul {{ $jadwalpencariandana->time }} WITA</p>
                    <p class="mt-3"><i class="bi bi-pin-map"></i> {{ $jadwalpencariandana->place }}</p>
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Pembicara : <br>&nbsp;&nbsp;&nbsp;&nbsp; {{ $jadwalpencariandana->activity }}</p>
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Tema : <br>&nbsp;&nbsp;&nbsp;&nbsp; {{ $jadwalpencariandana->message }}</p>
                    <p class="mt-3"><i class="bi bi-geo-alt"></i> {{ $jadwalpencariandana->address }}</p>
                  </div>
                </div>    
              </div> 
        </div>
    </div>
</div>


@endsection
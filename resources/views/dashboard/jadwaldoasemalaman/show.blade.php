@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/jadwaldoasemalaman" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/jadwaldoasemalaman/{{ $jadwaldoasemalaman->theme }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            {{-- <form action="/dashboard/jadwaldoasemalaman/{{ $jadwaldoasemalaman->theme }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-primary" onclick="return confirm('Yakin Menghapus?')">
                <i class="bi bi-x-square"></i> Hapus
              </button>
            </form> --}}

            <div class="row mt-3">
                <div class="col-md-12">
                  <div class="card-jadwaldoasemalaman">
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Pembicara : <br>&nbsp;&nbsp;&nbsp;&nbsp; {{ $jadwaldoasemalaman->speaker }}</p>
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Tema : <br>&nbsp;&nbsp;&nbsp;&nbsp; {{ $jadwaldoasemalaman->theme }}</p>
                    <p class="mt-3"><i class="bi bi-calendar-event"></i> {{ $jadwaldoasemalaman->date }}</p>                
                    <p class="mt-3"><i class="bi bi-clock"></i> Pukul {{ $jadwaldoasemalaman->time }} WITA</p>
                    <p class="mt-3"><i class="bi bi-pin-map"></i> {{ $jadwaldoasemalaman->place }}</p>
                    <p class="mt-3"><i class="bi bi-geo-alt"></i> {{ $jadwaldoasemalaman->address }}</p>
                  </div>
                </div>    
              </div> 
        </div>
    </div>
</div>


@endsection
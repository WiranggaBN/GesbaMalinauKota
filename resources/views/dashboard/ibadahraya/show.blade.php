@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/ibadahraya" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/ibadahraya" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            <form action="/dashboard/ibadahraya/{{ $ibadahraya->theme }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-primary" onclick="return confirm('Yakin Menghapus?')">
                <i class="bi bi-x-square"></i> Hapus
              </button>
            </form>

            <div class="row mt-3">
                <div class="col-md-12">
                  <div class="card-ibadahraya">
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Pembicara : <br>&nbsp;&nbsp;&nbsp;&nbsp; {{ $ibadahraya->speaker }}</p>
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Tema : <br>&nbsp;&nbsp;&nbsp;&nbsp; {{ $ibadahraya->theme }}</p>
                    <p class="mt-3"><i class="bi bi-calendar-event"></i> {{ $ibadahraya->date }}</p>                
                    <p class="mt-3"><i class="bi bi-clock"></i> Pukul {{ $ibadahraya->time }} WITA</p>
                    <p class="mt-3"><i class="bi bi-pin-map"></i> {{ $ibadahraya->place }}</p>
                    <p class="mt-3"><i class="bi bi-geo-alt"></i> {{ $ibadahraya->address }}</p>
                  </div>
                </div>    
              </div> 
        </div>
    </div>
</div>


@endsection
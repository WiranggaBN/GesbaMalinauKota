@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/ibadahpemuda" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/ibadahpemuda/{{ $ibadahpemuda->theme }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            <form action="/dashboard/ibadahpemuda/{{ $ibadahpemuda->theme }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-primary" onclick="return confirm('Yakin Menghapus?')">
                <i class="bi bi-x-square"></i> Hapus
              </button>
            </form>

            <div class="row mt-3">
                <div class="col-md-12">
                  <div class="card-ibadahpemuda">
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Pembicara : <br>&nbsp;&nbsp;&nbsp;&nbsp; {{ $ibadahpemuda->speaker }}</p>
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Tema : <br>&nbsp;&nbsp;&nbsp;&nbsp; {{ $ibadahpemuda->theme }}</p>
                    <p class="mt-3"><i class="bi bi-calendar-event"></i> {{ $ibadahpemuda->date }}</p>                
                    <p class="mt-3"><i class="bi bi-clock"></i> Pukul {{ $ibadahpemuda->time }} WITA</p>
                    <p class="mt-3"><i class="bi bi-pin-map"></i> {{ $ibadahpemuda->place }}</p>
                    <p class="mt-3"><i class="bi bi-geo-alt"></i> {{ $ibadahpemuda->address }}</p>
                  </div>
                </div>    
              </div> 
        </div>
    </div>
</div>


@endsection
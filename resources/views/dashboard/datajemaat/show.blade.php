@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/datajemaat" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/datajemaat/{{ $datajemaat->jumlahjemaat }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            {{-- <form action="/dashboard/ibadahraya/{{ $ibadahraya->theme }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-primary" onclick="return confirm('Yakin Menghapus?')">
                <i class="bi bi-x-square"></i> Hapus
              </button>
            </form> --}}

            <div class="row mt-3">
                <div class="col-md-12">
                  <div class="card-ibadahraya">
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Laki-Laki : {{ $datajemaat->jumlahlaki }} Orang</p>
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Perempuan : {{ $datajemaat->jumlahperempuan }} Orang</p>
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Dewasa : {{ $datajemaat->jumlahdewasa }} Orang</p>
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Pemuda : {{ $datajemaat->jumlahpemuda }} Orang</p>                
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Sekolah Minggu : {{ $datajemaat->jumlahsekolahminggu }} Orang</p>
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Lansia : {{ $datajemaat->jumlahlansia }} Orang</p>
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Balita : {{ $datajemaat->jumlahbalita }} Orang</p>
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Kepala Keluarga : {{ $datajemaat->jumlahkepalakeluarga }} Orang</p>
                    <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Jemaat : {{ $datajemaat->jumlahjemaat }} Orang</p>
                  </div>
                </div>    
              </div> 
        </div>
    </div>
</div>


@endsection
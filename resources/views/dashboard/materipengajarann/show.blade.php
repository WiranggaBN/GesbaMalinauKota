@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/materipengajarann" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/materipengajarann" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            <a href="/dashboard/materipengajarann" class="btn btn-primary"><i class="bi bi-x-square"></i></i> Hapus</a>

            <article class="my-3 fs-5">
                {!! $materipengajarann->body !!}
            </article>
              {{-- @foreach ($sejarah as $sejarahs) 
                  <article>
                    <h2><a href="/sejarahs/{{ $sejarahs->slug }}"></a></h2>
                    {!! $sejarahs->body !!}
                  </article>
              @endforeach --}}
        </div>
    </div>
</div>


@endsection
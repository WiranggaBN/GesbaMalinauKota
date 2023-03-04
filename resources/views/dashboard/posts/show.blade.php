@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/posts" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-primary border-0" onclick="return confirm('Yakin Menghapus?')">
                  <i class="bi bi-x-square"></i> Hapus
                </button>
              </form>

            <div class="mt-3">
                <h3 class="text-dark text-decoration-none">
                  {{ $post->title }}
                </h3>
                <p><small>{{ $post->date }}</small></p>
                <p>Ayat Pokok : <b> {{ $post->main_verse }} </b></p>
                <p>Pembicara : <b> {{ $post->speaker }} </b></p>
                <hr>
                <img src="https://source.unsplash.com/1200x300?{{ $post->excerpt }}" class="card-img-top mb-2" alt="{{ $post->slug }}">
                
                {!! $post->body !!}
              </div>
        </div>
    </div>
</div>


@endsection
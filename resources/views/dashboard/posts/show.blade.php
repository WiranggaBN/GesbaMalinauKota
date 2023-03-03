@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/posts" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/posts" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            <a href="/dashboard/posts" class="btn btn-primary"><i class="bi bi-x-square"></i></i> Hapus</a>

            </div>
                <div class="mt-5">
                <h3 class="text-dark text-decoration-none">
                    {{ $post->title }}
                </h3>
                <p>{{ $post->date }}</p>
                <p>{{ $post->main_verse }}</p>
                <p>{{ $post->speaker }}</p>
                <hr>
                <img src="../../f.jpg" alt="" class="gambarsatu mt-2"><br>
                {!! $post->body !!}
            </div>
        </div>
    </div>
</div>


@endsection
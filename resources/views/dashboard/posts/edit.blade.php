@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ubah Ringkasan Khotbah</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts/{{ $post->slug }}">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus required value="{{ old('title', $post->title) }}">
                @error('title')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Hari Tanggal</label>
                <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" required value="{{ old('date', $post->date) }}">
                @error('date')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="main_verse" class="form-label">Ayat Pokok</label>
                <input type="text" class="form-control @error('main_verse') is-invalid @enderror" id="main_verse" name="main_verse" required value="{{ old('main_verse', $post->main_verse) }}">
                @error('main_verse')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="speaker" class="form-label">Pembicara</label>
                <input type="text" class="form-control @error('speaker') is-invalid @enderror" id="speaker" name="speaker" required value="{{ old('speaker', $post->speaker) }}">
                @error('speaker')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="excerpt" class="form-label">Excerpt</label>
                <input type="text" class="form-control" id="excerpt" name="excerpt">
            </div> --}}
            <div class="mb-3">
                <label for="body" class="form-label">Isi</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary mb-5 me-3">Submit</button>
            {{-- <button type="reset" class="btn btn-primary mb-5">Reset</button> --}}
          </form>
    </div>

<script>
document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
})
</script>
@endsection
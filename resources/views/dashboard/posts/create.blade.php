@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Materi Pengajaran</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Hari Tanggal</label>
                <input type="text" class="form-control" id="date" name="date">
            </div>
            <div class="mb-3">
                <label for="main_verse" class="form-label">Ayat Pokok</label>
                <input type="text" class="form-control" id="main_verse" name="main_verse">
            </div>
            <div class="mb-3">
                <label for="speaker" class="form-label">Pembicara</label>
                <input type="text" class="form-control" id="speaker" name="speaker">
            </div>
            {{-- <div class="mb-3">
                <label for="excerpt" class="form-label">Excerpt</label>
                <input type="text" class="form-control" id="excerpt" name="excerpt">
            </div> --}}
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary mb-5 me-3">Submit</button>
            <button type="submit" class="btn btn-primary mb-5">Reset</button>
          </form>
    </div>

<script>
document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
})
</script>
@endsection
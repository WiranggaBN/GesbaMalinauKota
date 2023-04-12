@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ubah Kegiatan</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/kegiatan/{{ $kegiatan->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title', $kegiatan->title) }}">
                @error('title')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $kegiatan->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Keterangan</label>
                <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc" required value="{{ old('desc', $kegiatan->desc) }}">
                @error('desc')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="speaker" class="form-label">Pembicara</label>
                <input type="text" class="form-control @error('speaker') is-invalid @enderror" id="speaker" name="speaker" autofocus required value="{{ old('speaker', $kegiatan->speaker) }}">
                @error('speaker')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="month" class="form-label">Hari</label>
                <input type="text" class="form-control @error('month') is-invalid @enderror" id="month" name="month" required value="{{ old('month', $kegiatan->month) }}">
                @error('month')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Tanggal</label>
                <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" required value="{{ old('date', $kegiatan->date) }}">
                @error('date')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Waktu</label>
                <input type="text" class="form-control @error('time') is-invalid @enderror" id="time" name="time" required value="{{ old('time', $kegiatan->time) }}">
                @error('time')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label @error('image') is-invalid @enderror">Gambar</label>
                <input type="hidden" name="oldImage" value="{{ $kegiatan->image }}">
                @if ($kegiatan->image)
                    <img src="{{ asset('storage/' . $kegiatan->image ) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-5 me-3">Submit</button>
          </form>
</div>

<script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        } 
</script>
@endsection
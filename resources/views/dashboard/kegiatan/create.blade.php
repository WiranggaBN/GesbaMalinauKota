@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Kegiatan</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/kegiatan" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus required value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" autofocus required value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Keterangan</label>
                <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc" required value="{{ old('desc') }}">
                @error('desc')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="speaker" class="form-label">Pembicara</label>
                <input type="text" class="form-control @error('speaker') is-invalid @enderror" id="speaker" name="speaker" autofocus required value="{{ old('speaker') }}">
                @error('speaker')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="month" class="form-label">Hari</label>
                <input type="text" class="form-control @error('month') is-invalid @enderror" id="month" name="month" required value="{{ old('month') }}">
                @error('month')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Tanggal</label>
                <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" required value="{{ old('date') }}">
                @error('date')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Waktu</label>
                <input type="text" class="form-control @error('time') is-invalid @enderror" id="time" name="time" required value="{{ old('time') }}">
                @error('time')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label @error('image') is-invalid @enderror">Gambar</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-5 me-3">Submit</button>
            <button type="reset" class="btn btn-primary mb-5">Reset</button>
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
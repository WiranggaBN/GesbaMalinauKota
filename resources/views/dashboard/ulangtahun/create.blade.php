@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Ulang Tahun</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/ulangtahun" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus required value="{{ old('name') }}">
                @error('name')
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
                <label for="image" class="form-label @error('image') is-invalid @enderror">Gambar</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="datetime" class="form-label">Hari Ulang Tahun</label>
                <input type="text" class="form-control @error('datetime') is-invalid @enderror" id="datetime" name="datetime" required value="{{ old('datetime') }}">
                @error('datetime')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="biblechapter" class="form-label">Pasal Alkitab</label>
                <input type="text" class="form-control @error('biblechapter') is-invalid @enderror" id="biblechapter" name="biblechapter" autofocus required value="{{ old('biblechapter') }}">
                @error('biblechapter')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bibleverses" class="form-label">Ayat Alkitab</label>
                <input type="text" class="form-control @error('bibleverses') is-invalid @enderror" id="bibleverses" name="bibleverses" required value="{{ old('bibleverses') }}">
                @error('bibleverses')
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
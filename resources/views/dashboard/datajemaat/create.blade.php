@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Jemaat</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/datajemaat">
            @csrf
            <div class="mb-3">
                <label for="jumlahlaki" class="form-label">Jumlah Laki-Laki</label>
                <input type="text" class="form-control @error('jumlahlaki') is-invalid @enderror" id="jumlahlaki" name="jumlahlaki" autofocus required value="{{ old('jumlahlaki') }}">
                @error('jumlahlaki')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahperempuan" class="form-label">Jumlah Perempuan</label>
                <input type="text" class="form-control @error('jumlahperempuan') is-invalid @enderror" id="jumlahperempuan" name="jumlahperempuan" required value="{{ old('jumlahperempuan') }}">
                @error('jumlahperempuan')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahdewasa" class="form-label">Jumlah Dewasa</label>
                <input type="text" class="form-control @error('jumlahdewasa') is-invalid @enderror" id="jumlahdewasa" name="jumlahdewasa" required value="{{ old('jumlahdewasa') }}">
                @error('jumlahdewasa')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahpemuda" class="form-label">Jumlah Pemuda</label>
                <input type="text" class="form-control @error('jumlahpemuda') is-invalid @enderror" id="jumlahpemuda" name="jumlahpemuda" required value="{{ old('jumlahpemuda') }}">
                @error('jumlahpemuda')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahsekolahminggu" class="form-label">Jumlah Sekolah Minggu</label>
                <input type="text" class="form-control @error('jumlahsekolahminggu') is-invalid @enderror" id="jumlahsekolahminggu" name="jumlahsekolahminggu" required value="{{ old('jumlahsekolahminggu') }}">
                @error('jumlahsekolahminggu')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahlansia" class="form-label">Jumlah Lansia</label>
                <input type="text" class="form-control @error('jumlahlansia') is-invalid @enderror" id="jumlahlansia" name="jumlahlansia" required value="{{ old('jumlahlansia') }}">
                @error('jumlahlansia')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahbalita" class="form-label">Jumlah Balita</label>
                <input type="text" class="form-control @error('jumlahbalita') is-invalid @enderror" id="jumlahbalita" name="jumlahbalita" required value="{{ old('jumlahbalita') }}">
                @error('jumlahbalita')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahkepalakeluarga" class="form-label">Jumlah Kepala Keluarga</label>
                <input type="text" class="form-control @error('jumlahkepalakeluarga') is-invalid @enderror" id="jumlahkepalakeluarga" name="jumlahkepalakeluarga" required value="{{ old('jumlahkepalakeluarga') }}">
                @error('jumlahkepalakeluarga')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahjemaat" class="form-label">Jumlah Jemaat</label>
                <input type="text" class="form-control @error('jumlahjemaat') is-invalid @enderror" id="jumlahjemaat" name="jumlahjemaat" required value="{{ old('jumlahjemaat') }}">
                @error('jumlahjemaat')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-5 me-3">Submit</button>
            <button type="reset" class="btn btn-primary mb-5">Reset</button>
          </form>
    </div>
@endsection
@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ubah Data Jemaat</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/datajemaat/{{ $datajemaat->jumlahjemaat }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="jumlahlaki" class="form-label">Jumlah Laki-Laki</label>
                <input type="text" class="form-control @error('jumlahlaki') is-invalid @enderror" id="jumlahlaki" name="jumlahlaki" autofocus required value="{{ old('jumlahlaki', $datajemaat->jumlahlaki) }}">
                @error('jumlahlaki')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahperempuan" class="form-label">Jumlah Perempuan</label>
                <input type="text" class="form-control @error('jumlahperempuan') is-invalid @enderror" id="jumlahperempuan" name="jumlahperempuan" required value="{{ old('jumlahperempuan', $datajemaat->jumlahperempuan) }}">
                @error('jumlahperempuan')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahdewasa" class="form-label">Jumlah Dewasa</label>
                <input type="text" class="form-control @error('jumlahdewasa') is-invalid @enderror" id="jumlahdewasa" name="jumlahdewasa" autofocus required value="{{ old('jumlahdewasa', $datajemaat->jumlahdewasa) }}">
                @error('jumlahdewasa')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahpemuda" class="form-label">Jumlah Pemuda</label>
                <input type="text" class="form-control @error('jumlahpemuda') is-invalid @enderror" id="jumlahpemuda" name="jumlahpemuda" autofocus required value="{{ old('jumlahpemuda', $datajemaat->jumlahpemuda) }}">
                @error('jumlahpemuda')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahsekolahminggu" class="form-label">Jumlah Sekolah Minggu</label>
                <input type="text" class="form-control @error('jumlahsekolahminggu') is-invalid @enderror" id="jumlahsekolahminggu" name="jumlahsekolahminggu" autofocus required value="{{ old('jumlahsekolahminggu', $datajemaat->jumlahsekolahminggu) }}">
                @error('jumlahsekolahminggu')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahlansia" class="form-label">Jumlah Lansia</label>
                <input type="text" class="form-control @error('jumlahlansia') is-invalid @enderror" id="jumlahlansia" name="jumlahlansia" autofocus required value="{{ old('jumlahlansia', $datajemaat->jumlahlansia) }}">
                @error('jumlahlansia')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahbalita" class="form-label">Jumlah Balita</label>
                <input type="text" class="form-control @error('jumlahbalita') is-invalid @enderror" id="jumlahbalita" name="jumlahbalita" autofocus required value="{{ old('jumlahbalita', $datajemaat->jumlahbalita) }}">
                @error('jumlahbalita')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahkepalakeluarga" class="form-label">Jumlah Kepala Keluarga</label>
                <input type="text" class="form-control @error('jumlahkepalakeluarga') is-invalid @enderror" id="jumlahkepalakeluarga" name="jumlahkepalakeluarga" autofocus required value="{{ old('jumlahkepalakeluarga', $datajemaat->jumlahkepalakeluarga) }}">
                @error('jumlahkepalakeluarga')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlahjemaat" class="form-label">Jumlah Jemaat</label>
                <input type="text" class="form-control @error('jumlahjemaat') is-invalid @enderror" id="jumlahjemaat" name="jumlahjemaat" required value="{{ old('jumlahjemaat', $datajemaat->jumlahjemaat) }}">
                @error('jumlahjemaat')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-5 me-3">Submit</button>
          </form>
    </div>
@endsection
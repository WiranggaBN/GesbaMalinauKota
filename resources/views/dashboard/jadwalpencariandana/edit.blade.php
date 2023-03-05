@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ubah Jadwal Pencarian Dana</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/jadwalpencariandana/{{ $jadwalpencariandana->date }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="date" class="form-label">Hari Tanggal</label>
                <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" autofocus required value="{{ old('date', $jadwalpencariandana->date) }}">
                @error('date')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Waktu</label>
                <input type="text" class="form-control @error('time') is-invalid @enderror" id="time" name="time" required value="{{ old('time', $jadwalpencariandana->time) }}">
                @error('time')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="place" class="form-label">Tempat</label>
                <input type="text" class="form-control @error('place') is-invalid @enderror" id="place" name="place" required value="{{ old('place', $jadwalpencariandana->place) }}">
                  @error('place')
                      <div class="invalid-feedback">  
                          {{ $message }}
                      </div>
                  @enderror
            </div>
            <div class="mb-3">
                <label for="activity" class="form-label">Kegiatan</label>
                <input type="text" class="form-control @error('activity') is-invalid @enderror" id="activity" name="activity" required value="{{ old('activity', $jadwalpencariandana->activity) }}">
                @error('activity')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <input type="text" class="form-control @error('message') is-invalid @enderror" id="message" name="message" required value="{{ old('message', $jadwalpencariandana->message) }}">
                @error('message')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" required value="{{ old('address', $jadwalpencariandana->address) }}"></input>
                @error('address')
                    <div class="invalid-feedback">  
                      {{ $message }}
                    </div>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary mb-5 me-3">Submit</button>
          </form>
    </div>
@endsection
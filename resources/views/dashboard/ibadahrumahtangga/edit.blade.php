@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ubah Ibadah Rumah Tangga</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/ibadahrumahtangga/{{ $ibadahrumahtangga->theme }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="speaker" class="form-label">Pembicara</label>
                <input type="text" class="form-control @error('speaker') is-invalid @enderror" id="speaker" name="speaker" autofocus required value="{{ old('speaker', $ibadahrumahtangga->speaker) }}">
                @error('speaker')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="theme" class="form-label">Tema</label>
                <input type="text" class="form-control @error('theme') is-invalid @enderror" id="theme" name="theme" required value="{{ old('theme', $ibadahrumahtangga->theme) }}">
                @error('theme')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Hari Tanggal</label>
                <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" required value="{{ old('date', $ibadahrumahtangga->date) }}">
                @error('date')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Waktu</label>
                <input type="text" class="form-control @error('time') is-invalid @enderror" id="time" name="time" required value="{{ old('time', $ibadahrumahtangga->time) }}">
                @error('time')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="place" class="form-label">Tempat</label>
                <input type="text" class="form-control @error('place') is-invalid @enderror" id="place" name="place" required value="{{ old('place', $ibadahrumahtangga->place) }}">
                  @error('place')
                      <div class="invalid-feedback">  
                          {{ $message }}
                      </div>
                  @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" required value="{{ old('address', $ibadahrumahtangga->address) }}"></input>
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
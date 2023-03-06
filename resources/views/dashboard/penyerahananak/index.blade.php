@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Penyerahan Anak</h1>
    </div>

    <div class="col-6">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    </div>

    <div class="table-responsive col-lg-10">
      <a href="/dashboard/penyerahananak/cetak" target="_blank" class="btn text-light mb-3"><i class="bi bi-printer"></i> Cetak Penyerahan Anak</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Nama Ayah</th>
              <th scope="col">Nama Ibu</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">No. HP / Whatsapp</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat Lengkap</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($penyerahananak as $penyerahananaks)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $penyerahananaks->fullname }}</td>
              <td>{{ $penyerahananaks->fathername }}</td>
              <td>{{ $penyerahananaks->mothername }}</td>
              <td>{{ $penyerahananaks->gender }}</td>
              <td>{{ $penyerahananaks->place_of_birth }}</td>
              <td>{{ $penyerahananaks->birth_day }}</td>
              <td>{{ $penyerahananaks->phone }}</td>
              <td>{{ $penyerahananaks->email }}</td>
              <td>{{ $penyerahananaks->address }}</td>
              <td>
                <a href="/dashboard/penyerahananak/{{ $penyerahananaks->fullname }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                {{-- <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></i></a> --}}
                <form action="/dashboard/penyerahananak/{{ $penyerahananaks->fullname }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin Menghapus?')">
                    <i class="bi bi-x-square"></i>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection
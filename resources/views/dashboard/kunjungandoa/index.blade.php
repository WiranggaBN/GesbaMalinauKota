@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kunjungan Doa</h1>
    </div>

    <div class="col-6">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    </div>

    <div class="table-responsive col-lg-12">
      <a href="/dashboard/kunjungandoa/cetak" target="_blank" class="btn text-light mb-3"><i class="bi bi-printer"></i> Cetak Kunjungan Doa</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Ditujukan untuk?</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">No. HP / Whatsapp</th>
              <th scope="col">Email</th>
              <th scope="col">Jenis Pelayanan</th>
              <th scope="col">Tanggal dan Waktu Doa</th>
              <th scope="col">Detail / Pokok Doa</th>
              <th scope="col">Pesan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kunjungandoa as $kunjungandoas)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $kunjungandoas->diminta_oleh }}</td>
              <td>{{ $kunjungandoas->fullname }}</td>
              <td>{{ $kunjungandoas->gender }}</td>
              <td>{{ $kunjungandoas->phone }}</td>
              <td>{{ $kunjungandoas->email }}</td>
              <td>{{ $kunjungandoas->type_of_service }}</td>
              <td>{{ $kunjungandoas->pray_day }}</td>
              <td>{{ $kunjungandoas->detail }}</td>
              <td>{{ $kunjungandoas->message }}</td>
              <td>
                <a href="/dashboard/kunjungandoa/{{ $kunjungandoas->fullname }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                {{-- <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></i></a> --}}
                <form action="/dashboard/kunjungandoa/{{ $kunjungandoas->fullname }}" method="post" class="d-inline">
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
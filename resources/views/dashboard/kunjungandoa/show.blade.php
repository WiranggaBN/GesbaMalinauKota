@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-12">
            <a href="/dashboard/kunjungandoa" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            {{-- <a href="/dashboard/baptisan" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a> --}}
            <form action="/dashboard/kunjungandoa/{{ $kunjungandoa->fullname }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-primary" onclick="return confirm('Yakin Menghapus?')">
                <i class="bi bi-x-square"></i> Hapus
              </button>
            </form>

            <div class="table-responsive col-lg-12 mt-4">
                <table class="table table-striped table-sm border-dark">
                  <thead class="bg-dark text-white">
                    <tr>
                      {{-- <th scope="col">#</th> --}}
                      <th scope="col">Ditujukan untuk?</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">No. HP / Whatsapp</th>
                      <th scope="col">Email</th>
                      <th scope="col">Jenis Pelayanan</th>
                      <th scope="col">Tanggal dan Waktu Doa</th>
                      <th scope="col">Detail / Pokok Doa</th>
                      <th scope="col">Pesan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{ $kunjungandoa->diminta_oleh }}</td>
                        <td>{{ $kunjungandoa->fullname }}</td>
                        <td>{{ $kunjungandoa->gender }}</td>
                        <td>{{ $kunjungandoa->phone }}</td>
                        <td>{{ $kunjungandoa->email }}</td>
                        <td>{{ $kunjungandoa->type_of_service }}</td>
                        <td>{{ $kunjungandoa->pray_day }}</td>
                        <td>{{ $kunjungandoa->detail }}</td>
                        <td>{{ $kunjungandoa->message }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</div>


@endsection
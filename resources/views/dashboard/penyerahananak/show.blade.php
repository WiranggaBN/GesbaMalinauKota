@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-9">
            <a href="/dashboard/penyerahananak" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            {{-- <a href="/dashboard/penyerahananak" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a> --}}
            <form action="/dashboard/penyerahananak/{{ $penyerahananak->fullname }}" method="post" class="d-inline">
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
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Nama Ayah</th>
                      <th scope="col">Nama Ibu</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Tempat Lahir</th>
                      <th scope="col">Tanggal Lahir</th>
                      <th scope="col">No. HP / Whatsapp</th>
                      <th scope="col">Email</th>
                      <th scope="col">Alamat Lengkap</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ $penyerahananak->fullname }}</td>
                      <td>{{ $penyerahananak->fathername }}</td>
                      <td>{{ $penyerahananak->mothername }}</td>
                      <td>{{ $penyerahananak->gender }}</td>
                      <td>{{ $penyerahananak->place_of_birth }}</td>
                      <td>{{ $penyerahananak->birth_day }}</td>
                      <td>{{ $penyerahananak->phone }}</td>
                      <td>{{ $penyerahananak->email }}</td>
                      <td>{{ $penyerahananak->address }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</div>


@endsection
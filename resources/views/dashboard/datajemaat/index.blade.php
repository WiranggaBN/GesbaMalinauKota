@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Jemaat</h1>
    </div>

    <div class="col-6">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    </div>

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/datajemaat/create" class="btn text-light mb-3">Tambah Data Jemaat</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Jumlah Laki-Laki</th>
              <th scope="col">Jumlah Perempuan</th>
              <th scope="col">Jumlah Dewasa</th>
              <th scope="col">Jumlah Pemuda</th>
              <th scope="col">Jumlah Sekolah Minggu</th>
              <th scope="col">Jumlah Balita</th>
              <th scope="col">Jumlah Lansia</th>
              <th scope="col">Jumlah Kepala Keluarga</th>
              <th scope="col">Jumlah Jemaat</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datajemaat as $datajemaats)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $datajemaats->jumlahlaki }}</td>
              <td>{{ $datajemaats->jumlahperempuan }}</td>
              <td>{{ $datajemaats->jumlahdewasa }}</td>
              <td>{{ $datajemaats->jumlahpemuda }}</td>
              <td>{{ $datajemaats->jumlahsekolahminggu }}</td>
              <td>{{ $datajemaats->jumlahlansia }}</td>
              <td>{{ $datajemaats->jumlahbalita }}</td>
              <td>{{ $datajemaats->jumlahkepalakeluarga }}</td>
              <td>{{ $datajemaats->jumlahjemaat }}</td>
              <td>
                <a href="/dashboard/datajemaat/{{ $datajemaats->jumlahjemaat }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                <a href="/dashboard/datajemaat/{{ $datajemaats->jumlahjemaat }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard/datajemaat/{{ $datajemaats->jumlahjemaat }}" method="post" class="d-inline">
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
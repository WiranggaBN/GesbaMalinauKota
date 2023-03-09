@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pemberkatan Nikah</h1>
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
      <a href="/dashboard/pemberkatannikah/cetak" target="_blank" class="btn text-light mb-3"><i class="bi bi-printer"></i> Cetak Pemberkatan Nikah</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Mempelai Pria</th>
              <th scope="col">Nama Mempelai Wanita</th>
              <th scope="col">Status Mempelai Pria</th>
              <th scope="col">Status Mempelai Wanita</th>
              <th scope="col">Tanggal Pernikahan</th>
              <th scope="col">No. HP / Whatsapp Mempelai Pria</th>
              <th scope="col">No. HP / Whatsapp Mempelai Wanita</th>
              <th scope="col">Email Mempelai Pria</th>
              <th scope="col">Email Mempelai Wanita</th>
              <th scope="col">Alamat Lengkap Mempelai Pria</th>
              <th scope="col">Alamat Lengkap Mempelai Wanita</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pemberkatannikah as $pemberkatannikahs)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $pemberkatannikahs->grooms_name }}</td>
              <td>{{ $pemberkatannikahs->brides_name }}</td>
              <td>{{ $pemberkatannikahs->status_grooms }}</td>
              <td>{{ $pemberkatannikahs->status_brides }}</td>
              <td>{{ $pemberkatannikahs->date_wedding }}</td>
              <td>{{ $pemberkatannikahs->phone_grooms }}</td>
              <td>{{ $pemberkatannikahs->phone_brides }}</td>
              <td>{{ $pemberkatannikahs->email_grooms }}</td>
              <td>{{ $pemberkatannikahs->email_brides }}</td>
              <td>{{ $pemberkatannikahs->address_grooms }}</td>
              <td>{{ $pemberkatannikahs->address_brides }}</td>
              <td>
                <a href="/dashboard/pemberkatannikah/{{ $pemberkatannikahs->grooms_name }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                {{-- <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></i></a> --}}
                <form action="/dashboard/pemberkatannikah/{{ $pemberkatannikahs->grooms_name }}" method="post" class="d-inline">
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
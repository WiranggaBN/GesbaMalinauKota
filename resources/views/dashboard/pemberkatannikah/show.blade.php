@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-12">
            <a href="/dashboard/pemberkatannikah" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i></i> Kembali</a>
            <a href="/dashboard/pemberkatannikah" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Ubah</a>
            <a href="/dashboard/pemberkatannikah" class="btn btn-primary"><i class="bi bi-x-square"></i></i> Hapus</a>

            <div class="table-responsive col-lg-12 mt-4">
                <table class="table table-striped table-sm border-dark">
                  <thead class="bg-dark text-white">
                    <tr>
                      {{-- <th scope="col">#</th> --}}
                        <th scope="col">Nama Mempelai Pria</th>
                        <th scope="col">Nama Mempelai Wanita</th>
                        <th scope="col">Status Mempelai Pria</th>
                        <th scope="col">Status Mempelai Wanita</th>
                        <th scope="col">No. HP / Whatsapp Mempelai Pria</th>
                        <th scope="col">No. HP / Whatsapp Mempelai Wanita</th>
                        <th scope="col">Email Mempelai Pria</th>
                        <th scope="col">Email Mempelai Wanita</th>
                        <th scope="col">Alamat Lengkap Mempelai Pria</th>
                        <th scope="col">Alamat Lengkap Mempelai Wanita</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{ $pemberkatannikah->grooms_name }}</td>
                        <td>{{ $pemberkatannikah->brides_name }}</td>
                        <td>{{ $pemberkatannikah->status_grooms }}</td>
                        <td>{{ $pemberkatannikah->status_brides }}</td>
                        <td>{{ $pemberkatannikah->phone_grooms }}</td>
                        <td>{{ $pemberkatannikah->phone_brides }}</td>
                        <td>{{ $pemberkatannikah->email_grooms }}</td>
                        <td>{{ $pemberkatannikah->email_brides }}</td>
                        <td>{{ $pemberkatannikah->address_grooms }}</td>
                        <td>{{ $pemberkatannikah->address_brides }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</div>


@endsection
@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Materi Pengajaran</h1>
    </div>

    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Slug</th>
              <th scope="col">Body</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($materipengajaran as $materipengajarann)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $materipengajarann->slug }}</td>
              <td>{{ $materipengajarann->body }}</td>
              <td>
                <a href="/dashboard/materipengajarann/{{ $materipengajarann->slug }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></i></a>
                <a href="" class="badge bg-danger"><i class="bi bi-x-square"></i></i></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection
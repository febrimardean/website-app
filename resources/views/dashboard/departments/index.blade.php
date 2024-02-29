@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Departemen</h1>
    </div>
    <div class="table-responsive col-lg-8">
        <a href="/dashboard/departments/create" class="btn btn-primary mb-3">Buat Departemen</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($departments as $department)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $department->name }}</td>
                <td>
                    <a href="/dashboard/departments/{{ $department->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/departments/{{ $department->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/departments/{{ $department->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection

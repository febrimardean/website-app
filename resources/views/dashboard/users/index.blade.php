@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User</h1>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <a href="/dashboard/users/create" class="btn btn-primary mb-3">Buat User</a>
        </div>
        <div class="col-lg-7"></div>
        <div class="col-lg-3">
            <form action="/users">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control me-3 rounded" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark rounded" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Role</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="/dashboard/users/{{ $user->id }}" class="badge bg-info"><span
                                data-feather="eye"></span></a>
                        <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning"><span
                                data-feather="edit"></span></a>
                        <form action="/dashboard/users/{{ $user->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                    data-feather="x-circle"></span></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div >
            {{ $users->links() }}
        </div>
    </div>
@endsection

@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $users->name }}</h1>
    </div>
    <div class="row">
        <div class="d-flex">
            <a class="btn btn-primary me-2" href="/dashboard/users"><span data-feather="arrow-left"></span> Kembali</a>
            <a class="btn btn-warning me-2" href="/dashboard/{{ $users->id }}/edit"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $users->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
        </div>
    </div>

    <div class="row mt-5 ms-3">
        <div class="col-lg-2">
            <img src=" https://picsum.photos/id/237/200/300" alt={{ $users->name }}>
        </div>
        <div class="col-lg-1">
            <div class="row">
                <p>Nama :</p>
            </div>
            <div class="row">
                <p>Username :</p>
            </div>
            <div class="row">
                <p>Role :</p>
            </div>
            <div class="row">
                <p>Email :</p>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="row">
                <p>{{ $users->name }}</p>
            </div>
            <div class="row">
                <p>{{ $users->username }}</p>
            </div>
            <div class="row">
                <p>{{ $users->role }}</p>
            </div>
            <div class="row">
                <p>{{ $users->email }}</p>
            </div>
        </div>
    </div>
    </div>
@endsection

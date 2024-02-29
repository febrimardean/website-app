@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $users->name }}</h1>
    </div>
    <div class="row">
        <div class="d-flex ms-3">
            <a class="btn btn-primary me-2" href="/dashboard/users">Kembali</a>
            <a class="btn btn-warning me-2" href="">Edit</a>
            <a class="btn btn-danger" href="">Hapus</a>
        </div>
    </div>
    <div class="row">
        <img src=" https://picsum.photos/id/237/40/60" alt={{ $users->name }}>
    </div>
@endsection

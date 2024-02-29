@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat Datang, {{ auth()->user()->role }} <b>{{ auth()->user()->name }}</b> </h1>
    </div>
    <div class="alert alert-success alert-dismissible fade show position-fixed bottom-0 end-0 m-4" role="alert" id="loginSuccessAlert">
        Anda berhasil login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endsection

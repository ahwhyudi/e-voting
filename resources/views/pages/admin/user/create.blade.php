@extends('layouts.admin')

@section('title')
    Tambah Admin
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form action="{{ route('data-admin.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="form-label">
                            Nama
                        </label>
                        <input required type="text" class="form-control" name="nama">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">
                            Email
                        </label>
                        <input required type="email" class="form-control" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">
                            Password
                        </label>
                        <input required type="password" class="form-control" name="password" minlength="6">
                    </div>

                    <div class="col-md-12">
                        <button class="btn btn-primary mt-4">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

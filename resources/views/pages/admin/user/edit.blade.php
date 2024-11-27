@extends('layouts.admin')

@section('title')
    Edit Admin
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form action="{{ route('data-admin.update', $admin->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="form-label">
                            Nama
                        </label>
                        <input type="text" class="form-control" name="nama" value="{{ $admin->nama }}">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">
                            Email
                        </label>
                        <input type="email" class="form-control" name="email" value="{{ $admin->email }}">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">
                            Password
                        </label>
                        <input type="password" class="form-control" name="password" minlength="6">
                        <small>*Kosongkan jika tidak ingin diubah</small>
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

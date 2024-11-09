@extends('layouts.admin')

@section('title')
    Edit Siswa
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('dpt.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label required">
                            Nama Lengkap
                        </label>
                        <input type="text" class="form-control" value="{{ $user->nama_lengkap }}" required
                            name="nama_lengkap">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label required">
                            NISN
                        </label>
                        <input type="text" class="form-control" required name="nisn" value="{{ $user->nisn }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label required">
                            Kelas
                        </label>
                        <input type="text" class="form-control" required name="kelas" value="{{ $user->kelas }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label required">
                            Password
                        </label>
                        <input type="password" class="form-control" name="password">
                        <small>*Kosongkan jika tidak ingin diubah</small>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary">
                            Simpan Data
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

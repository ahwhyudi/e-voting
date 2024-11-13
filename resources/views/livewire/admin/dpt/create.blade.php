@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('dpt.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label required">
                            Nama Lengkap
                        </label>
                        <input type="text" class="form-control" required name="nama_lengkap">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label required">
                            NISN
                        </label>
                        <input type="text" class="form-control" required name="nisn">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label required">
                            Kelas
                        </label>
                        <input type="text" class="form-control" required name="kelas">
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

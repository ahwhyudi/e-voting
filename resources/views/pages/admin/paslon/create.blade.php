@extends('layouts.admin')

@section('title')
    Create Pasangan Calon
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('dashboard.paslon.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="card">
            <div class="card-body">
                <div class="row mt-2">

                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">
                            Nama Lengkap Calon Ketua
                        </label>
                        <input type="text" class="form-control" name="nama_lengkap_ketua">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">
                            Nama Lengkap Calon Wakil Ketua
                        </label>
                        <input type="text" class="form-control" name="nama_lengkap_wakil">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Masukan Foto</label>
                        <input type="file" class="form-control" name="foto">
                    </div>

                    <div class="col-6">
                        <label for="">Pasang Nomor Urut</label>
                        <input type="number" class="form-control" name="nomor" value="{{ old('nomor') }}">
                    </div>

                    <div class="col-6">
                        <label for=""> Visi</label>
                        <textarea id="editor" name="visi">{{ old('visi') }}</textarea>
                    </div>
                    <div class="col-6">
                        <label for=""> Misi</label>
                        <textarea id="editor2" name="misi">{{ old('misi') }}</textarea>
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-himafh">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @push('script')
        <script src="//cdn.ckeditor.com/4.17.1/basic/ckeditor.js"></script>
        <script>
            CKEDITOR.replace("editor");
            CKEDITOR.replace("editor2");
        </script>
    @endpush
@endsection

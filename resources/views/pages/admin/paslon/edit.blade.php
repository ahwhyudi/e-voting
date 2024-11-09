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
    <form action="{{ route('dashboard.paslon.update', $paslon->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row mt-2">

                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">
                            Nama Lengkap Calon Ketua
                        </label>
                        <input type="text" class="form-control" name="nama_lengkap_ketua"
                            value="{{ $paslon->nama_lengkap_ketua }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">
                            Nama Lengkap Calon Wakil Ketua
                        </label>
                        <input type="text" class="form-control" name="nama_lengkap_wakil"
                            value="{{ $paslon->nama_lengkap_wakil }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Masukan Foto</label>
                        <input type="file" class="form-control" name="foto">
                        <small>*Kosongkan jika tidak ingin di ubah</small>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Frame Youtube</label>
                        <input type="text" class="form-control" name="frame_youtube"
                            value="{{ $paslon->frame_youtube }}">
                    </div>
                    <div class="col-12">
                        <label for="">Pasang Nomor Urut</label>
                        <input type="number" class="form-control" name="nomor" value="{{ $paslon->nomor }}">
                    </div>

                    <div class="col-6">
                        <label for=""> Visi</label>
                        <textarea id="editor" name="visi">{{ $paslon->visi }}</textarea>
                    </div>
                    <div class="col-6">
                        <label for=""> Misi</label>
                        <textarea id="editor2" name="misi">{{ $paslon->misi }}</textarea>
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

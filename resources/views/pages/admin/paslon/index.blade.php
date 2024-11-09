@extends('layouts.admin')

@section('title')
    Manajemen Pasangan Calon
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row my-4">
                <div class="col-md-12">
                    <a href="{{ route('dashboard.paslon.create') }}" class="btn btn-himafh">
                        Tambah Data Paslon
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>
                                Nama Lengkap Ketua
                            </th>
                            <th>
                                Nama Lengkap Wakil
                            </th>
                            <th>
                                Nomor Urut
                            </th>
                            <th>
                                Image
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>
                                    {{ $item->nama_lengkap_ketua }}
                                </td>
                                <td>
                                    {{ $item->nama_lengkap_wakil }}
                                </td>
                                <td>
                                    {{ $item->nomor }}
                                </td>
                                <td>
                                    <img src="/storage/{{ $item->foto }}" alt="" class="img-fluid"
                                        style="width: 60px;">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('paslon.edit', $item->id) }}" class="btn btn-sm btn-info">
                                            Edit
                                        </a>
                                        <form action="{{ route('paslon.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <span class="btn btn-sm btn-danger ms-3 confirm_delete"
                                                data-message="Nomor urut {{ $item->nomor }}">
                                                Hapus
                                            </span>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

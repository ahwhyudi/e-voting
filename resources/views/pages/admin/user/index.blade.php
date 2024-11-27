@extends('layouts.admin')

@section('title')
    Admin
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('data-admin.create') }}" class="btn btn-primary">
                Tambah Data
            </a>
        </div>
        <div class="card-body pt-3">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Nama
                            </th>
                            <th>
                                Email
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
                                    {{ $item->nama }}
                                </td>
                                <td>
                                    {{ $item->email }}
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('data-admin.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('data-admin.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <span class="btn btn-sm btn-danger ms-3 confirm_delete"
                                                data-message="{{ $item->nama }}">
                                                Hapus
                                            </span>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="12" class="text-center">
                                    Tidak ada data
                                </th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

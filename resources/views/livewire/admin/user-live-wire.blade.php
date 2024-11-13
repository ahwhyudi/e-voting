<div>
    @section('title')
        Data Siswa
    @endsection
    <div>
        <div class="card">
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-md-2">
                        <a href="{{ route('dpt.create') }}" class="btn btn-primary">
                            Tambah Data
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body shadow">
                        {{-- filter table --}}
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="">Cari</label>
                                <input type="text" class="form-control" placeholder="cari nama, nisn"
                                    wire:model.debounce.400ms="keyword">
                                <span class="text-primary mt-2" wire:loading wire:target="keyword">
                                    <div class="spinner-border" role="status">
                                        <span class="sr-only"></span>
                                    </div>
                                </span>
                            </div>

                            {{-- <div class="col">
                                <label for="">Jumlah Data</label>
                                <select class="form-select" wire:model="jmlData">
                                    <option value="">Pilih</option>
                                    <option value="{{ 10 }}">10</option>
                                    <option value="{{ 50 }}">50</option>
                                    <option value="{{ 100 }}">100</option>
                                    <option value="{{ 200 }}">200</option>
                                </select>
                                <span class="text-primary mt-2" wire:loading wire:target="jmlData">
                                    <div class="spinner-border" role="status">
                                        <span class="sr-only"></span>
                                    </div>
                                </span>
                            </div> --}}
                        </div>
                        {{-- endfilter table --}}
                        <!-- Default Table -->
                        <table class="table table-hover text-xsmall table-bordered mt-4">
                            <thead>
                                <tr class="fs-6">
                                    <th scope="col">NAMA</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->nama_lengkap }}
                                        </td>
                                        <td>
                                            {{ $user->nisn }}
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('dpt.edit', $user->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    Edit
                                                </a>
                                                <form action="{{ route('dpt.destroy', $user->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <span class="btn btn-danger ms-3 btn-sm confirm_delete">
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
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

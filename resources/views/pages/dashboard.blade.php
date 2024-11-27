@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row mb-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="h6 mt-3">
                        Total Pemilih
                    </div>
                    <div class="h3 fw-bold">
                        {{ count($users) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="h6 mt-3">
                        Belum Memilih
                    </div>
                    <div class="h3 fw-bold">
                        {{ count($ygBelumMilih) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="h6 mt-3">
                        Sudah Memilih
                    </div>
                    <div class="h3 fw-bold">
                        {{ count($ygSudahMilih) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body pt-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <x-chart />
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout')
@section('css')
    <style>
        .card-link,
        .card-link:hover{
            color:inherit
        }
    </style>
@endsection
@section('konten')
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <a class="card card-link" href="{{route('pendapatan')}}">
                <div class="card-header bg-success text-white">Pendapatan</div>
                <div class="card-body">
                    belum ada data
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a class="card card-link">
                <div class="card-header bg-danger text-white">Pengeluaran</div>
                <div class="card-body">
                    belum ada data
                </div>
            </a>
        </div>
    </div>
@endsection
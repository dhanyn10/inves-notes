@extends('layout')
@section('konten')
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-header bg-success text-white">Pendapatan</div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <input
                                class="form-control form-control-sm"
                                type="number"
                                name="pendapatan"
                                dir="rtl"
                                required
                            >
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-header bg-danger text-white">Pengeluaran</div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <input
                                class="form-control form-control-sm"
                                type="number"
                                name="pengeluaran"
                                dir="rtl"
                                required
                            >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
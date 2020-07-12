@extends('layout')
@section('konten')
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-header">Data Pribadi</div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <input
                                class="form-control form-control-sm"
                                type="email"
                                name="email"
                                placeholder="email"
                                value="{{session('email')}}"
                            >
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control form-control-sm"
                                type="password"
                                name="password1"
                                placeholder="password baru"
                            >
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control form-control-sm"
                                type="password"
                                name="password2"
                                placeholder="ulangi password baru"
                            >
                        </div>
                        <div class="form-group">
                            <button class="btn btn-light float-right">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
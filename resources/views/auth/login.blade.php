@extends('layout')
@section('konten')
    <div class="col-md-4 offset-md-4 mt-4">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                @include('flash::message')
                <form method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control form-control-sm" type="text" name="email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-sm" type="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
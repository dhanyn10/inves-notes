@extends('layout')
@section('konten')
<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-header">Pendapatan</div>
            <div class="card-body">
                @include('flash::message')
                @if (count($data) > 0)
                    <table class="table table-bordered">
                        <tr>
                            <th>nama</th>
                            <th>jenis</th>
                            <th>nominal</th>
                        </tr>
                        @foreach ($data as $dp)
                        <tr>
                            <td>{{$dp->nama}}</td>
                            <td>{{$dp->jenis}}</td>
                            <td>{{$dp->nominal}}</td>
                        </tr>
                        @endforeach
                    </table>
                @else
                    belum ada data
                @endif
                <!-- Button trigger modal -->
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalpendapatan">
                    Tambah
                </button>

                <!-- Modal -->
                <div
                    class="modal fade"
                    id="modalpendapatan"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="labelpendapatan"
                    aria-hidden="true"
                >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelpendapatan">tambah pendapatan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="/tambahPendapatan" method="post">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" name="nama" placeholder="nama" class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <select name="jenis" class="form-control form-control-sm w-100">
                                                <option value="tetap">tetap</option>
                                                <option value="tidak tetap">tidak tetap</option>
                                            </select>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="number" placeholder="nominal" name="nominal" class="form-control form-control-sm" dir="rtl">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
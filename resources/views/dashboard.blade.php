@extends('layout')
@section('konten')
hello {{session('email')}} <a href="{{route('logout')}}">logout</a>
@endsection
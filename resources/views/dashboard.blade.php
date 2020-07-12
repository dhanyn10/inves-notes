@extends('layout')
hello {{session('email')}} <a href="{{route('logout')}}">logout</a>
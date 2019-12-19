@extends('admin.layouts.master')

@section('header')
@include('admin.modules.header')
@include('sweet::alert')
@endsection

@section('sitebar')
@include('admin.modules.sitebar')
@endsection

@section('footer')
@include('admin.modules.footer')
@endsection

@section('input-js')
@include('admin.modules.input-js')
@endsection



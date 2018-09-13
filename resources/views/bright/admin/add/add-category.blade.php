@extends('add-template')
@section('h1')
    Add Category
    @endsection
@section('form-open')
    {{ Form::open(array('url' => 'admin/save-category', 'files' => true)) }}
    @endsection


@extends('add-template')
@section('h1')
    Add Page
@endsection
@section('form-open')
    {{ Form::open(array('url' => '/admin/save-page', 'files' => true)) }}
@endsection
@section('additional')
    {{--<p>Choose Manufacture:{!! Form::select('category_id', $categotys)!!}</p>--}}
    @if($categorys)
    <div class="form-group ">
        {!! Form::label('category', 'Category:') !!}
        @foreach($categorys as $category)
            <br>{!! Form::checkbox('category_id[]',$category['id']) !!}<span>{{$category['h1']}}</span>
            @endforeach
    </div>
        @else
        <div class="form-group ">
            Категорий нет<br>
            <a href="{{url('/admin/add-category')}}">Создать категорию</a>
        </div>
    @endif
    <div class="form-group ">
        {!! Form::label('image', 'Image:') !!}
        {!! Form::file('image') !!}
    </div>
    <div class="form-group ">
        {!! Form::label('short_content', 'Description site:') !!}<br>
        {!! Form::textarea('short_content') !!}
    </div>
    @endsection

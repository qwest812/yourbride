@extends('add-template')
{{--@dump($page)--}}
{{--@dump($categories);--}}
{{--@dump($myCategory);--}}
{{--@include('bright.head')--}}
@section('form-open')
    {!! Form::model($page, ['method' => 'POST', 'url' => 'admin/update-page/' . $page->id,'files' => true]) !!}
@endsection
@section('additional')
    <div class="form-group ">
        {!! Form::label('category', 'Category:') !!}
        @foreach( $page->category_id as $category)
            {{--@dump($category)--}}
        @if(isset($category['check']))
                <br>{!! Form::checkbox('category_id[]',$category['id'],true) !!}<span>{{$category['h1']}}</span>
            @else
                <br>{!! Form::checkbox('category_id[]',$category['id']) !!}<span>{{$category['h1']}}</span>
            @endif

        @endforeach
    </div>
    <div class="form-group ">
        {!! Form::label('image', 'Image:') !!}
        <img src="{{url($page->image)}}" style="height: 100px; width: 100px">

        {!! Form::file('image') !!}
    </div>
    <div class="form-group ">
        {!! Form::label('short_content', 'Description site:') !!}<br>
        {!! Form::textarea('short_content') !!}
    </div>
@endsection

{{--{!! Form::label('Add new good') !!}--}}
{{--{!! Form::close() !!}--}}
{{--@include('bright.footer')--}}
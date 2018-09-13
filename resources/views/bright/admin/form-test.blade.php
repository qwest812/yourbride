<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>@yield('h1')</h1>
    {{ Form::open(array('url' => '#', 'files' => true)) }}
    <div class="form-group">
        {!! Form::label('content', 'Content') !!}
        {!! Form::textarea('content', null, ['id'=>'content']); !!}
    </div>
    <div class="form-group">
        {{--{!! Form::submit('Click Me!',['name'=>'add-page']); !!}--}}
        {!! Form::submit('Save!',['id'=>'save']) !!}

    </div>
    {{ Form::close() }}
</div>
</body>
</html>

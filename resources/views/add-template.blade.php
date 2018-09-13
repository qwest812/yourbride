<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                callbacks: {
                    onImageUpload: function(files) {
                        var el = $(this);
                        sendFile(files[0],el);
                    }
                }
            });
        });

        function sendFile(file, el) {
            var  data = new FormData();
            data.append("file", file);
            var url = 'upload';
            $.ajax({
                data: data,
                type: "POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: url,
                cache: false,
                contentType: false,
                processData: false,
                success: function(url2) {
                    console.log(url2);
                    el.summernote('insertImage', url2);
                }
            });
        }

    </script>
</head>
<body>
{{ Form::open(array('url' => 'add-bright-sites', 'files' => true)) }}


<div class="form-group ">
    {!! Form::label('h1', 'H1:') !!}
    {!! Form::text('h1') !!}
</div>
<div class="form-group ">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>
</div><div class="form-group ">
    {!! Form::label('og_description', 'OG_Description:') !!}
    {!! Form::text('og_description') !!}
</div>
<div class="form-group ">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description') !!}
</div>
<div class="form-group ">
    {!! Form::label('keywords', 'Keywords:') !!}
    {!! Form::text('keywords') !!}
</div>

<div class="form-group ">
    {!! Form::label('rating_site', 'Rating Site:') !!}
    {!! Form::text('rating_site') !!}
</div>

{{--<div class="form-group ">--}}
    {{--    {!! Form::label('img_url', 'Download Image:') !!}--}}
    {{--    {!! Form::file('img_url')!!}--}}
    {{--</div>--}}

<div class="form-group ">
    {!! Form::label('votes', 'Votes:') !!}
    {!! Form::number('votes') !!}
</div>

<div class="form-group ">
    {!! Form::label('reply_rate', 'Replay Rate:') !!}
    {!! Form::number('reply_rate') !!}
</div>

<div class="form-group ">
    {!! Form::label('girls_online', 'Girls Online:') !!}
    {!! Form::number('girls_online') !!}
</div>

<div class="form-group ">
    {!! Form::label('visit_site', 'Url site:') !!}
    {!! Form::text('visit_site') !!}
</div>

<div class="form-group ">
    {!! Form::label('local_url', 'Local Url:') !!}
    {!! Form::text('local_url') !!}
</div>
<div class="form-group">
    {!! Form::label('content', 'Content') !!}
    {!! Form::textarea('content', null, ['id'=>'content']); !!}
</div>
<div class="form-group">

    {!! Form::submit('Click Me!'); !!}
</div>

{{ Form::close() }}
</body>
</html>




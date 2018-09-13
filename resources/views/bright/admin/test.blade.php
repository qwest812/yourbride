<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>
    <script>

        $(document).ready(function () {

            $('#dd').summernote({
                callbacks: {
                    onImageUpload: function(files) {
                        var el = $(this);
                        sendFile(files[0],el);
                    }
                }
            });
            function sendFile(file, el) {
                var  data = new FormData();
                data.append("file", file);
                var url = '{{ route('upload') }}';
                $.ajax({
                    data: data,
                    type: "POST",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: url,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(url2) {
                        el.summernote('insertImage', url2);
                    }
                });
            }

        });

    </script>
</head>
<body>
{{ Form::open(array('url' => 'test', 'files' => true)) }}


<div class="form-group">
    {!! Form::label('content', 'TEXT') !!}
    {!! Form::textarea('content', null, ['id'=>'dd']); !!}
</div>
<div class="form-group">

    {!! Form::submit('Click Me!'); !!}
</div>

{{ Form::close() }}
</body>
</html>




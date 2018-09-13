@section('h1')
    Add Category
    @endsection
@section('form-open')
    {{ Form::open(array('url' => 'admin/save-category', 'files' => true)) }}
    @endsection

@include('bright/admin/header')

@include('bright.admin.navbar')
<h1>@yield('h1')</h1>
@yield('form-open')
<div class="form-group ">
    {!! Form::label('h1', 'H1(name):') !!}
    {!! Form::text('h1') !!}
</div>
<div class="form-group ">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>
<div class="form-group ">
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
    {!! Form::label('short_content', 'Description site:') !!}<br>
    {!! Form::textarea('short_content') !!}
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
    {{--{!! Form::submit('Click Me!',['name'=>'add-page']); !!}--}}
    {!! Form::submit('Save!',['id'=>'save']) !!}

</div>

{{ Form::close() }}



@include('bright/admin/footer')
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

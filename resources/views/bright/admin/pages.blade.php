{{--@dump($pages)--}}
@include('bright/admin/header')
@include('bright.admin.navbar')
<h1>Страници</h1>
<ul>
    @if($pages)
        @foreach($pages as $page)
            <li>{{$page['h1']}} <a href="{{url('admin/edit/page', $page['id'])}}">Edit</a>
                <a href="{{url($page['local_url'])}}"> View</a></li>
        @endforeach
    @else
        <div class="form-group ">
            Страниц нет<br>
            <a href="{{url('/admin/add-page')}}">Создать страницу</a>
        </div>
    @endif

</ul>
@include('bright/admin/footer')
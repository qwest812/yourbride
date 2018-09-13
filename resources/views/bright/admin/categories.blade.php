{{--@dump($allCategories)--}}
@include('bright/admin/header')
@include('bright.admin.navbar')
<h1>Категории</h1>
<ul>
    @if($allCategories)
        @foreach($allCategories as $page)
            <li>{{$page['h1']}} <a href="{{url('admin/edit/category', $page['id'])}}">Edit</a>
                <a href="{{url($page['local_url'])}}"> View</a></li>
        @endforeach
        @else
        <div class="form-group ">
            Категорий нет<br>
            <a href="{{url('/admin/add-category')}}">Создать категорию</a>
        </div>
        @endif

</ul>
@include('bright/admin/footer')
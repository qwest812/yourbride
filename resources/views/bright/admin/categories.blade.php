{{--@dump($allCategories)--}}
@include('bright/admin/header')
@include('bright.admin.navbar')
<h1>Категории</h1>

    @if($allCategories)
        @foreach($allCategories as $page)
            <div class="container">
                <div class="row button_link ">
                    <div class="col-md-1">{{$page['h1']}}</div>
                    <div class="col-md-1"><a href="{{url('admin/edit/category', $page['id'])}}">Edit</a></div>
                    <div class="col-md-1"><a href="{{url('admin/delete/category',$page['id'])}}" target="_blank"> Delete</a></div>
                    <div class="col-md-1"><a href="{{url($page['local_url'])}}" target="_blank"> View</a></div>
                </div>
            </div>

        @endforeach
        @else
        <div class="form-group ">
            Категорий нет<br>
            <a href="{{url('/admin/add-category')}}">Создать категорию</a>
        </div>
        @endif
@include('bright/admin/footer')
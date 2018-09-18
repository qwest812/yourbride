{{--@dump($pages)--}}
@include('bright/admin/header')
@include('bright.admin.navbar')
<h1>Страници</h1>
<ul>

    @if($pages)
        @foreach($pages as $page)
            <div class="container list">
                <div class="row button_link ">
                    <div class="col-md-3">{{$page['h1']}}</div>
                    <div class="col-md-1"><a href="{{url('admin/edit/page', $page['id'])}}">Edit</a></div>
                    <div class="col-md-1"><a href="{{url('admin/delete/page',$page['id'])}}" target="_blank"> Delete</a></div>
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

    {{--@if($pages)--}}
        {{--@foreach($pages as $page)--}}
            {{--<li>{{$page['h1']}} <a href="{{url('admin/edit/page', $page['id'])}}">Edit</a>--}}
                {{--<a href="{{url($page['local_url'])}}" target="_blank"> View</a></li>--}}
        {{--@endforeach--}}
    {{--@else--}}
        {{--<div class="form-group ">--}}
            {{--Страниц нет<br>--}}
            {{--<a href="{{url('/admin/add-page')}}">Создать страницу</a>--}}
        {{--</div>--}}
    {{--@endif--}}

</ul>
@include('bright/admin/footer')
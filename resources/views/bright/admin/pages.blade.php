@dump($allCategories)
<ul>
@foreach($allCategories as $category)
        <li>{{$category->h1}} <a href="{{url('admin/categories/edit', $category->id)}}">Edit</a>
                                <a href="{{url($category->local_url)}}"> View</a></li>
    @endforeach
</ul>
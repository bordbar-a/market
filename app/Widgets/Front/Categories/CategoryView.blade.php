@php
   if(!empty($data[0])){
    $categories = $data[0];


@endphp
<div class="side-nav margin-bottom-60">

    <div class="side-nav-head">
        <button class="fa fa-bars"></button>
        <h4>دسته بندی ها</h4>
    </div>

    <ul class="list-group list-group-bordered list-group-noicon uppercase">
        @foreach($categories['root'] as $category)
            @include('widgets.categories.items' , ['category'=>$category ,'deep'=>2])
        @endforeach
    </ul>

</div>

@php
}
@endphp


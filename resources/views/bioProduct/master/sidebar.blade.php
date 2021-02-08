<div id="sidebar" class="span3">
    <div class="well well-small">
        <ul class="nav nav-list">
            @foreach (category() as $category)
            <li><a href="{{route('productByCategory',$category)}}"><span class="icon-chevron-right {{ set_active_route('productByCategory',$category) }} "></span>{{ $category->title }}</a></li>
            @endforeach
            <li style="border:0"> &nbsp;</li>
        </ul>
    </div>
</div>
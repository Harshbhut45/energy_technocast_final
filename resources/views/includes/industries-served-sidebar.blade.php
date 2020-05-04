<div class="widget" id="nav_menu-2">
    <h3 class="short_title  mr-b-12">Industries Served ?</h3>
    <div class="menu-features-container">
        @foreach($categories as $category)
        <ul class="menu" id="menu-features">
            <li><a href="{{ route('products.public', ['slug' => $category->slug ]) }}">{{ $category->name }}</a></li>
        </ul>
        @endforeach
    </div>
</div>
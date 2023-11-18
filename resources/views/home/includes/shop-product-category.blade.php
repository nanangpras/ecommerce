<div class="col-lg-4  mb-100">
    <aside class="sidebar ltn__shop-sidebar">
        <!-- Category Widget -->
        <div class="widget ltn__menu-widget">
            <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
            <ul>
                @foreach ($category as $item)
                <li><a href="{{route('shop.category',$item->slug ?? '')}}">{{$item->name}} <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- Search Widget -->
        <div class="widget ltn__search-widget">
            <h4 class="ltn__widget-title ltn__widget-title-border">Search Objects</h4>
            <form action="#">
                <input type="text" name="search" placeholder="Search your keyword...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

    </aside>
</div>
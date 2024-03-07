<!-- Mobile Menu Filters -->
<div class="mobile-menu-toggle toogle-filters d-lg-none px-[5px] float-start bg-webiin sticky top-[150px] mr-0 rounded-ee-lg rounded-tr-lg shadow-lg z-[1000]">
    <a href="#ltn__utilize-mobile-menu-filters" class="ltn__utilize-toggle" >
        <img src="{{url("/themes-frontend/img/filter.svg")}}" alt="Filter">
    </a>
    <p class="py-2 absolute font-bold bg-white w-100 ml-[-5px] mt-[0] flex items-center" style="border-radius: 0 10px 10px 10px; writing-mode: vertical-rl; text-orientation: upright;">
        Filter
    </p>
</div>
<div id="ltn__utilize-mobile-menu-filters" class="ltn__utilize top-[150px] ltn__utilize-mobile-menu  rounded-ee-lg rounded-tr-lg shadow-lg" 
style="height: auto; padding: 20px;">
    <div class="ltn__utilize-menu-inner ltn__scrollbar pr-0">
        <div class="ltn__utilize-menu-head items-center mb-0">
            <h4 class="ltn__widget-title mb-0 ltn__widget-title-border">Kategori Template</h4>
            <button class="ltn__utilize-close ml-auto">×</button>
        </div>
        <div class="ltn__utilize-menu">
            <aside class="sidebar ltn__shop-sidebar">
                <!-- Category Widget -->
                <div class="widget ltn__menu-widget border-0 py-0" >
                    <ul>
                        @foreach ($category as $item)
                        <li class="text-hover-webiin"><a
                                href="{{route('shop.category',$item->slug ?? '')}}">{{$item->name}} <span><i
                                        class="fas fa-long-arrow-alt-right"></i></span></a>
                        </li>
                        @if (count($item->children) > 0)
                        @foreach ($item->children as $subcategory)
                        <div class="ps-3">
                            <a class="text-hover-webiin"
                                href="{{route('shop.category',$subcategory->slug ?? '')}}">{{$subcategory->name}}</a>
                        </div>
                        @endforeach
                        @endif
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</div>
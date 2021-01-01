@include('header')
<main>
    <section class="container">


        <ul class="b-crumbs">
            <li>
                <a href="{{url('/')}}">
                    Home
                </a>
            </li>
            <li>
                <a href="catalog-list.html">
                    Catalog
                </a>
            </li>
            <li>
                @if($view==1)
                <span>Desktop</span>
                @else
                <span>Laptops</span>
                @endif
            </li>
        </ul>
        <h1 class="main-ttl">
            @if($view==1)
            <span>Desktop</span>
            @else
            <span>Laptops</span>
            @endif
        </h1>
        <!-- Catalog Sidebar - start -->
        <div class="section-sb">

            <!-- Catalog Categories - start -->

            <!-- Catalog Categories - end -->

            <!-- Filter - start -->
            <div class="section-filter">
                <button id="section-filter-toggle" class="section-filter-toggle" data-close="Hide Filter" data-open="Show Filter">
                    <span>Show Filter</span> <i class="fa fa-angle-down"></i>
                </button>
                <div class="section-filter-cont">
                    <div class="section-filter-price">

                        <div class="range-slider section-filter-price" data-min="0" data-max="1000" data-from="200" data-to="800" data-prefix="$" data-grid="false"> </div>
                        <br>
                        price range <br>
                    </div>


                </div>
            </div>
            <!-- Filter - end -->

        </div>
        <!-- Catalog Sidebar - end -->
        <!-- Catalog Items | List V2 - start -->
        <div class="section-cont">

            <!-- Catalog Topbar - start -->
            <div class="section-top">

                <!-- View Mode -->
                <ul class="section-mode">
                    <li class="section-mode-gallery"><a title="View mode: Gallery" href="catalog-gallery.html"></a></li>
                    <li class="section-mode-list active"><a title="View mode: List" href="catalog-list.html"></a></li>
                    <li class="section-mode-table"><a title="View mode: Table" href="catalog-table.html"></a></li>
                </ul>

                <!-- Sorting -->
                <div class="section-sortby">
                    <p>default sorting</p>
                    <ul>
                        <li>
                            <a href="#">sort by popularity</a>
                        </li>
                        <li>
                            <a href="#">low price to high</a>
                        </li>
                        <li>
                            <a href="#">high price to low</a>
                        </li>
                        <li>
                            <a href="#">by title A <i class="fa fa-angle-right"></i> Z</a>
                        </li>
                        <li>
                            <a href="#">by title Z <i class="fa fa-angle-right"></i> A</a>
                        </li>
                        <li>
                            <a href="#">default sorting</a>
                        </li>
                    </ul>
                </div>

                <!-- Count per page -->
                <div class="section-count">
                    <p>12</p>
                    <ul>
                        <li><a href="#">12</a></li>
                        <li><a href="#">24</a></li>
                        <li><a href="#">48</a></li>
                    </ul>
                </div>

            </div>

            <!-- Catalog Topbar - end -->
            <div class="prod-items section-items prod-list2">
                @foreach($item as $row) 
                <div class="prodlist-i">
                    <a class="list-img-carousel prodlist-i-img" href="{{route('product',['id'=>$row->id,'view'=>$view])}}"><!-- NO SPACE --><img src="{{ asset("data/image/".$row->Image) }}" alt="No image"></a>
                    <div class="prodlist-i-cont">
                        <h3><a href="{{route('product',['id'=>$row->id,'view'=>$view])}}">{{$row->Name}}</a></h3>
                        <p class="prodlist-i-info">
                            <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>
                            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>
                            <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>
                        </p>
                        <div class="prodlist-i-txt">
                            {{$row->Description }}                       </div>
                        <div class="prodlist-i-action">
                            <span class="prodlist-i-price">
                                <b>{{$row->Price }} Taka</b>
                            </span>
                            <p class="prodlist-i-qnt">
                                <input value="1" type="text">
                                <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                                <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                            </p>
                            <p class="prodlist-i-addwrap">
                                <a href="{{route('add_to_cart',['id'=>$row->id,'view'=>$view])}}" class="prodlist-i-add">Add to cart</a>
                            </p>
                        </div>
                        <div class="prodlist-i-skuwrap">


                        </div>
                    </div>

                    <ul class="prodlist-i-props2">
                        {{$row->Features}}
<!--                        <li><span class="prodlist-i-propttl"><span>Exterior</span></span> <span class="prodlist-i-propval">Silt Pocket</span></li>
                        <li><span class="prodlist-i-propttl"><span>Material</span></span> <span class="prodlist-i-propval">PU</span></li>
                        <li><span class="prodlist-i-propttl"><span>Occasion</span></span> <span class="prodlist-i-propval">Versatile</span></li>
                        <li><span class="prodlist-i-propttl"><span>Shape</span></span> <span class="prodlist-i-propval">Casual Tote</span></li>
                        <li><span class="prodlist-i-propttl"><span>Pattern Type</span></span> <span class="prodlist-i-propval">Solid</span></li>
                        <li><span class="prodlist-i-propttl"><span>Style</span></span> <span class="prodlist-i-propval">American Style</span></li>
                        <li><span class="prodlist-i-propttl"><span>Hardness</span></span> <span class="prodlist-i-propval">Soft</span></li>
                        <li><span class="prodlist-i-propttl"><span>Decoration</span></span> <span class="prodlist-i-propval">None</span></li>
                        <li><span class="prodlist-i-propttl"><span>Closure Type</span></span> <span class="prodlist-i-propval">Zipper</span></li>-->
                    </ul>
                </div>
                @endforeach
            </div>

            <!-- Pagination - start -->
            <ul class="pagi">
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="pagi-next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
            <!-- Pagination - end -->
        </div>
        <!-- Catalog Items | List V2 - end -->

        <!-- Quick View Product - start -->
        <div class="qview-modal">
            <div class="prod-wrap">
                <a href="product.html">
                    <h1 class="main-ttl">
                        <span>Reprehenderit adipisci</span>
                    </h1>
                </a>
                <div class="prod-slider-wrap">
                    <div class="prod-slider">
                        <ul class="prod-slider-car">
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">
                                    <img src="http://placehold.it/500x591" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="prod-thumbs">
                        <ul class="prod-thumbs-car">
                            <li>
                                <a data-slide-index="0" href="#">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="1" href="#">
                                    <img src="http://placehold.it/500x591" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="2" href="#">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="3" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="4" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="5" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="6" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="prod-cont">
                    <p class="prod-actions">
                        <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>
                        <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>
                    </p>
                    <div class="prod-skuwrap">
                        <p class="prod-skuttl">Color</p>
                        <ul class="prod-skucolor">
                            <li class="active">
                                <img src="img/color/blue.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/red.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/green.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/yellow.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/purple.jpg" alt="">
                            </li>
                        </ul>
                        <p class="prod-skuttl">Sizes</p>
                        <div class="offer-props-select">
                            <p>XL</p>
                            <ul>
                                <li><a href="#">XS</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li class="active"><a href="#">XL</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">4XL</a></li>
                                <li><a href="#">XXL</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="prod-info">
                        <p class="prod-price">
                            <b class="item_current_price">$238</b>
                        </p>
                        <p class="prod-qnt">
                            <input type="text" value="1">
                            <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prod-addwrap">
                            <a href="#" class="prod-add">Add to cart</a>
                        </p>
                    </div>
                    <ul class="prod-i-props">
                        <li>
                            <b>SKU</b> 05464207
                        </li>
                        <li>
                            <b>Manufacturer</b> Mayoral
                        </li>
                        <li>
                            <b>Material</b> Cotton
                        </li>
                        <li>
                            <b>Pattern Type</b> Print
                        </li>
                        <li>
                            <b>Wash</b> Colored
                        </li>
                        <li>
                            <b>Style</b> Cute
                        </li>
                        <li>
                            <b>Color</b> Blue, Red
                        </li>
                        <li><a href="#" class="prod-showprops">All Features</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Quick View Product - end -->
    </section>
</main>

@include('footer')


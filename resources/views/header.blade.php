<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>ICNNSOFT</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700ii%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('data/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('data/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('data/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('data/css/ion.rangeSlider.skinFlat.css') }}">
    <link rel="stylesheet" href="{{ asset('data/css/jquery.bxslider.css') }}">
    <link rel="stylesheet" href="{{ asset('data/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('data/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('data/css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('data/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('data/css/media.css') }}">

</head>

<body>
<!-- Header - start -->
<header class="header">

    <!-- Topbar - start -->
    <div class="header_top">
        <div class="container">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <i class='fa fa-phone'></i> +880 130 377 2022
                </li>
                <li>
                    <i class="fa fa-envelope"></i> contact@icnnsoft.com
                </li>
            </ul>
            <!-- Social links -->
            <ul class="social-icons nav navbar-nav">
                <li>
                    <a href="http://facebook.com" rel="nofollow" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="http://google.com" rel="nofollow" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com" rel="nofollow" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="http://vk.com" rel="nofollow" target="_blank">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="http://instagram.com" rel="nofollow" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>		</div>
    </div>
    <!-- Topbar - end -->

    <!-- Logo, Shop-menu - start -->
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('data/image/icnnsoft_white_logo.png') }}" alt="ICNNSOFT">
                </a>
            </div>
            <div class="shop-menu">
                <ul>

<!--                    <li>
                        <a href="wishlist.html">
                            <i class="fa fa-heart"></i>
                            <span class="shop-menu-ttl">Wishlist</span>
                            (<span id="topbar-favorites">1</span>)
                        </a>
                    </li>

                    <li>
                        <a href="compare.html">
                            <i class="fa fa-bar-chart"></i>
                            <span class="shop-menu-ttl">Compare</span> (5)
                        </a>
                    </li>-->

                    @if(isset($username))
                    <li class="topauth">
                        <a href="userdetail">
                            <span class="shop-menu-ttl">{{$username}}</span>
                        </a>                   
                    </li>
                    @else
                    <li class="topauth">
                        <a href="loginreg">
                            <i class="fa fa-lock"></i>
                            <span class="shop-menu-ttl">Registration</span>
                        </a>
                        <a href="loginreg">
                            <span class="shop-menu-ttl">Login</span>
                        </a>
                    </li>
                    @endif
                    <li>
                        <div class="h-cart">
                            <a href="cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="shop-menu-ttl">Cart</span>
                                @if($errors->any())                   
                                (<b>{{$errors->first()}}</b>)
                                @else
                                (<b>0</b>)
                                @endif
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Logo, Shop-menu - end -->

    <!-- Topmenu - start -->
    <div class="header-bottom">
        <div class="container">
            <nav class="topmenu">

                <!-- Catalog menu - start -->
                <div class="topcatalog">
                    <a class="topcatalog-btn" href="catalog-list.html"><span>All</span> catalog</a>
                    <ul class="topcatalog-list">
                        <li>
                            <a href="{{ url('cataloglist') }}">
                                Desktop PC
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Laptop
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="{{route('cataloglaptop',['brand'=>"Asus"])}}">
                                       Asus
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('cataloglaptop',['brand'=>"Hp"])}}">
                                        Hp
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('cataloglaptop',['brand'=>"Lenovo"])}}">
                                        Lenovo
                                    </a>
                                    
                                </li>
                                <li>
                                    <a href="{{route('cataloglaptop',['brand'=>"Acer"])}}">
                                        Acer
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('cataloglaptop',['brand'=>"Dell"])}}">
                                        Dell
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Notebook
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Monitors
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Gadget
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Gaming
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Catalog menu - end -->

                <!-- Main menu - start -->
                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li>
                        <a href="{{ url('cataloglist') }}" >
                            Desktop PC
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="catalog-list.html">
                            Laptop <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('cataloglaptop',['brand'=>"Asus"])}}">
                                   Asus
                                </a>
                            </li>
                            <li>
                                <a href="{{route('cataloglaptop',['brand'=>"Hp"])}}">
                                    Hp
                                </a>
                            </li>
                            <li>
                                <a href="{{route('cataloglaptop',['brand'=>"Dell"])}}">
                                    Dell
                                </a>
                            </li>
                            <li>
                                <a href="{{route('cataloglaptop',['brand'=>"Lenovo"])}}">
                                    Lenovo
                                </a>
                            </li>
                            <li>
                                <a href="{{route('cataloglaptop',['brand'=>"Acer"])}}">
                                    Acer
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="product.html">
                            NoteBook 
                        </a>
                      
                    </li>
                    <li>
                        <a href="elements.html">
                            Monitor
                        </a>
                    </li>
                    <li >
                        <a href="blog.html">
                            Gadget 
                        </a>
                        
                    </li>
                    <li >
                        <a href="#">
                            Gaming 
                        </a>
                       
                    </li>
                    <li>
                        <a href="" rel="nofollow" target="_blank" class="pcbuilder">
                            PC BUILDER
                        </a>
                    </li>
                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>
                <!-- Main menu - end -->

                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="#">
                        <input type="text" placeholder="Search products">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Search - end -->

            </nav>		</div>
    </div>
    <!-- Topmenu - end -->

</header>
<!-- Header - end -->

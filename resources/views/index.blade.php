@include('header')
<!-- Main Content - start -->
<main>
    <section class="container">


        <!-- Slider -->
        <div class="fr-slider-wrap">
            <div class="fr-slider">
                <ul class="slides">
                    <li>
                        <img src="{{ asset('data/image/pexels-pixabay-38568.jpg') }}" alt="">
                        <div class="fr-slider-cont">
                            <h3>MEGA SALE -30%</h3>
                            <p>BUY 1 GET 1</p>
                            <p class="fr-slider-more-wrap">
                                <a class="fr-slider-more" href="#">View collection</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('data/image/pexels-designecologist-1779487.jpg') }}" alt="">
                        <div class="fr-slider-cont">
                            <h3>NEW COLLECTION</h3>
                            <p>BUY 1 GET 1</p>
                            <p class="fr-slider-more-wrap">
                                <a class="fr-slider-more" href="#">Shopping now</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('data/image/pexels-pixabay-38568.jpg') }}" alt="">
                        <div class="fr-slider-cont">
                            <h3>Top Sale</h3>
                            <p>BUY 1 GET 1</p>
                            <p class="fr-slider-more-wrap">
                                <a class="fr-slider-more" href="#">Start shopping</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Banners -->
        <div class="banners-wrap">
            <div class="banners-list">
                <div class="banner-i style_11">
                    <span class="banner-i-bg" style="background: url({{ asset('data/image/pexels-parag-deshmukh-577768.jpg') }});"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">NEW COLLECTION</p>
                        <h3 class="banner-i-ttl">HEADPHONES</h3>
                        <p class="banner-i-link"><a href="section.html">View More</a></p>
                    </div>
                </div>
                <div class="banner-i style_22">
                    <span class="banner-i-bg" style="background: url({{ asset('data/image/pexelsadv.jpg') }});"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">GREAT COLLECTION</p>
                        <h3 class="banner-i-ttl">KEYBOARD</h3>
                        <p class="banner-i-link"><a href="section.html">Show more</a></p>
                    </div>
                </div>
                <div class="banner-i style_21">
                    <span class="banner-i-bg" style="background: url({{ asset('data/image/pexels-dids-1643753.jpg') }});"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-link"><a href="section.html">Go to catalog</a></p>
                    </div>
                </div>
                <div class="banner-i style_21">
                    <span class="banner-i-bg" style="background: url({{ asset('data/image/pexels-visually-us-2823936.jpg') }});"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-link"><a href="section.html">View More</a></p>
                    </div>
                </div>
                <div class="banner-i style_22">
                    <span class="banner-i-bg" style="background: url({{ asset('data/image/pexels-mati-mango-4893862.jpg') }});"></span>
                    <div class="banner-i-cont">
                        <h3 class="banner-i-ttl">ALEXA</h3>
                        <p class="banner-i-link"><a href="section.html">Shop now</a></p>
                    </div>
                </div>
                <div class="banner-i style_12">
                    <span class="banner-i-bg" style="background: url({{ asset('data/image/pexels-pixabay-51383.jpg') }});"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-link"><a href="section.html">View More</a></p>
                    </div>
                </div>
            </div>
        </div>
                <!-- Banners -->

    </section>
</main>
@include('footer')
@include('header')
<main>
    <section class="container stylization maincont">


        <ul class="b-crumbs">
            <li>
                <a href="{{url('/')}}">
                    Home
                </a>
            </li>
            <li>
                <span>Cart</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Cart</span></h1>
        <!-- Cart Items - start -->
        <form action="#">

            <div class="cart-items-wrap">
                <table class="cart-items">
                    <thead>
                        <tr>
                            <td class="cart-image">Photo</td>
                            <td class="cart-ttl">Products</td>
                            <td class="cart-price">Price</td>
                            <td class="cart-quantity">Quantity</td>
                            <td class="cart-summ">Sum</td>
                            <td class="cart-del">&nbsp;</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($item as $row)
                        <tr>
                            <td class="cart-image">
                                <a href="product.html">
                                    <img src="{{ asset("data/image/".$row['image']) }}" alt="No image" height="81" width="60">
                                </a>
                            </td>
                            <td class="cart-ttl">
                                <a href="#">{{$row['name']}}</a>
                                <p>Color: Red</p>
                                <p>Size: XS</p>
                            </td>
                            <td class="cart-price">
                                <b>{{$row['price']/$row['qty']}}</b>
                            </td>
                            <td class="cart-quantity">
                                <p class="cart-qnt">
                                    <input value="{{$row['qty']}}" type="text">
                                    <a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
                                    <a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
                                </p>
                            </td>
                            <td class="cart-summ">
                                <b>{{$row['price']}}</b>
                                <p class="cart-forone">unit price <b>$220</b></p>
                            </td>
                            <td class="cart-del">
                                <a href="#" class="cart-remove"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <ul class="cart-total">
                <li class="cart-summ">TOTAL: <b>0</b></li>
            </ul>
            <div class="cart-submit">
                <div class="cart-coupon">
                    <input placeholder="your coupon" type="text">
                    <a class="cart-coupon-btn" href="#"><img src="img/ok.png" alt="your coupon"></a>
                </div>
                <a href="#" class="cart-submit-btn">Checkout</a>
                <a href="#" class="cart-clear">Clear cart</a>
            </div>
        </form>
        <!-- Cart Items - end -->

    </section>
</main>


@include('footer')
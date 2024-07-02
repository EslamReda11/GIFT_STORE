<section class="section" style="margin-top:-100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php $total = 0; ?>
                @if (session('cart'))

                    <!-- this block is all about display the products present in the cookie  -->

                    <div class="shopping-cart">
                        <div class="shopping-cart-table">
                            <div class="table-responsive">
                                <div class="col-md-12 text-right mb-3" style="margin-top:15px;">
                                   <button onclick="window.location.href='clear-cart'" class="buttonC_cart">
                                       <svg viewBox="0 0 448 512" class="svgIcon_C_cart"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
                                     </button>
                                </div>
                                @foreach (session('cart') as $id => $details)
                                    <?php $total += $details['Final_Price'] * $details['item_quantity']; ?>


                                    <div align="center" class="card p-3 cartpage cart-product-quantity">
                                        <a class="entry-thumbnail" href="javascript:void(0)">
                                            <img src="{{ asset('Uploads/Products/' . $details['item_image'] . '') }}"
                                                width="100%" alt="{{ $details['item_image'] }}">
                                        </a>
                                        <br>
                                        <h4>
                                            <a href="javascript:void(0)">{{ $details['item_name'] }}</a>
                                        </h4>

                                        <input type="hidden" class="product_id" value="{{ $details['item_id'] }}">
                                        Quantity: <div class="modify_quantity">
                                            <button
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="fas fa-minus"></i></button>
                                            <input class="quantity" min="1" name="quantity"
                                                value="{{ $details['item_quantity'] }}" type="number"
                                                style="width:50px;margin:0px;">
                                            <button
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="fas fa-plus"></i></button>
                                        </div>

                                        Price <strong>
                                            <span class="cart-grand-total-price">
                                                <strike class="red-text"
                                                    style="font-size:20px;">{{ $details['item_price'] * $details['item_quantity'] }}/-</strike>
                                            </span>
                                            <span class="green-text"
                                                style="font-size:25px;">{{ $details['Final_Price'] * $details['item_quantity'] }}
                                                /- </span><br>
                                            <span>{{ $details['contentforofferprice'] }}</span>
                                        </strong>
                                        </p>
                                        <div class="col-md-4">
                                            <form action="delete-from-cart" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $id }}">

                                                <button type="submit" class="  badge badge-pill btn-danger px-2 py-2"
                                                    data-id="{{ $id }}">Remove </button>
                                            </form>
                                        </div>

                                        </tr>
                                    </div>
                                @endforeach


                            </div>
                        </div><!-- /.shopping-cart-table -->
                        <div class="row">

                            <div class="col-md-4 col-sm-12 ">
                                <div class="cart-shopping-total">
                                    <hr>
                                    <div class="row">
                                        <div align="center" class="col-md-6">
                                            <h6 class="cart-grand-name"><strong>Grand Total</strong></h6>
                                        </div>
                                        <div align="center" class="col-md-6">
                                            <h1 class="cart-grand-price">
                                               <strong>
                                                    <span
                                                        class="cart-grand-price-viewajax">{{ $total }}</span>EGP
                                               </strong>
                                            </h1>
                                        </div>
                                    </div>
                                    <hr>
                                    <div align="center" class="row">
                                        <div class="col-md-12">
                                            <div class="cart-checkout-btn text-center">
                                                @if (Auth::user())
                                                    <a href="{{ url('checkout') }}"
                                                        class="btn btn-outline-success   checkout-btn text-dark">PROCCED
                                                        TO CHECKOUT</a>
                                                @else
                                                    <a href="{{ url('login') }}"
                                                        class="btn btn-outline-success  checkout-btn text-dark">PROCCED
                                                        TO CHECKOUT</a>
                                                    {{-- you add a pop modal for making a login --}}
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-2">
                                            Or
                                        </div>
                                        <div align="center" class="col-md-12">

                                            <a href="{{ url('/#Products') }}" class="btaobtn   btaobtn-primary">Continue Shopping</a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.shopping-cart -->
                    @else
                        <!-- this block is all about display the message that the cart is empty -->
                        <div class="row">
                            <div class="col-md-12 mycard py-5 text-center">
                                <div class="mycards">
                                    <h4>Your cart is currently empty.</h4>
                                    <a href="{{ url('/#Products') }}" class="btn btn-upper btn-primary outer-left-xs mt-5"
                                        style="border-radius:30px;">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                @endif

            </div>
        </div> <!-- /.row -->
    </div><!-- /.container -->
</section>

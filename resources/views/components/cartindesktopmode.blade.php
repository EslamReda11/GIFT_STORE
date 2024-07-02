@if (session('status'))
    <script>
        $(document).ready(function() {
            alertify.set('notifier', 'position', 'top-right');


            alertify.alert("Status", "Item Removed Succesfully");
        });
    </script>
@endif

@if (session('cartclear'))
    <script>
        $(document).ready(function() {
            alertify.set('notifier', 'position', 'top-right');


            alertify.alert("Status", "All Items are Removed from the Cart!");
        });
    </script>
@endif

{{-- button Clear Cart --}}
<style>
    .buttonC_cart {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: rgb(20, 20, 20);
    border: none;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
    cursor: pointer;
    transition-duration: .3s;
    overflow: hidden;
    position: relative;
    }

    .svgIcon_C_cart {
    width: 12px;
    transition-duration: .3s;
    }

    .svgIcon_C_cart path {
    fill: white;
    }

    .buttonC_cart:hover {
    width: 140px;
    border-radius: 50px;
    transition-duration: .3s;
    background-color: rgb(255, 69, 69);
    align-items: center;
    }

    .buttonC_cart:hover .svgIcon_C_cart {
    width: 50px;
    transition-duration: .3s;
    transform: translateY(60%);
    }

    .buttonC_cart::before {
    position: absolute;
    top: -20px;
    content: "Clear Cart";
    color: white;
    transition-duration: .3s;
    font-size: 2px;
    }

    .buttonC_cart:hover::before {
    font-size: 13px;
    opacity: 1;
    transform: translateY(30px);
    transition-duration: .3s;
    }

</style>




<div class="px-5" style="margin-top:-4%;">
    <div class="shopping-cart">
        <?php $total = 0; ?>
        @if (session('cart'))

            <div class="shopping-cart-table">
                <div class="table-responsive">
                    <div class="col-md-12 text-right mb-3" style="margin-top:15px;">
                        {{-- <a href="clear-cart" class="  font-weight-bold ">Clear Cart</a> --}}
                        <button onclick="window.location.href='clear-cart'" class="buttonC_cart">
                            <svg viewBox="0 0 448 512" class="svgIcon_C_cart"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
                          </button>

                    </div>
                    <table class="table my-auto  text-center">
                        <thead class="table-bordered" style="background: cadetblue;border-style:solid;">
                            <tr>
                                <th class="cart-image" style="font-size:medium;font-weight:bold;">Image</th>
                                <th class="cart-product-name" style="font-size:medium;font-weight:bold;">Product Name</th>
                                <th class="cart-qty" style="font-size:medium;font-weight:bold;">Quantity</th>
                                <th class="cart-total" style="font-size:medium;font-weight:bold;">Price</th>
                                <th class="cart-romove" style="font-size:medium;font-weight:bold;">Remove</th>
                            </tr>
                        </thead>

                        <tbody class="my-auto">
                            @foreach (session('cart') as $id => $details)
                                <?php $total += $details['Final_Price'] * $details['item_quantity']; ?>

                                <tr class="cartpage">
                                    <td class="cart-image">
                                        <a class="entry-thumbnail" href="javascript:void(0)">
                                            <img src="{{ asset('Uploads/Products/' . $details['item_image'] . '') }}"
                                                width="300px" height="300px">
                                        </a>
                                    </td>
                                    <td class="cart-product-name-info">
                                        <h4 class='cart-product-description'>
                                            <a href="javascript:void(0)">{{ $details['item_name'] }}</a>
                                        </h4>

                                    </td>
                                    <td class="cart-product-quantity">

                                        <input type="hidden" class="product_id" value="{{ $details['item_id'] }}">
                                        <div class="modify_quantity">
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
                                    </td>
                                    <td class="cart-product-grand-total">
                                        <strong>
                                            <span class="cart-grand-total-price">
                                                <strike class="red-text"
                                                    style="font-size:20px;">{{ $details['item_price'] * $details['item_quantity'] }}/-</strike>
                                            </span>
                                            <span class="green-text"
                                                style="font-size:25px;">{{ $details['Final_Price'] * $details['item_quantity'] }}
                                                /- </span><br>
                                            <span>{{ $details['contentforofferprice'] }}</span>
                                        </strong>
                                    </td>
                                    <td style="font-size: 20px;color:black;">
                                        <form action="delete-from-cart" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $id }}">

                                            <button type="submit" class="  badge badge-pill btn-danger px-2 py-2"
                                                data-id="{{ $id }}"><i class="fas fa-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-12 estimate-ship-tax"> <br><br>
                    <div>
                        <a href="/#Products" class="btaobtn btaobtn-upper btaobtn-primary outer-left-xs mx-5">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 ">
                    <div class="cart-shopping-total">
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="cart-grand-name">Grand Total</h6>
                            </div>
                            <div class="col-md-6">
                                <h6 class="cart-grand-price">

                                    <span class="cart-grand-price-viewajax">{{ $total }}</span> EGP
                                </h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-checkout-btn text-center">
                                    @if (Auth::user())
                                        <a href="{{ url('checkout') }}"
                                            class="btn btn-outline-success   checkout-btn text-dark">PROCCED TO
                                            CHECKOUT</a>
                                    @else
                                        <a href="{{ url('login') }}"
                                            class="btn btn-outline-success  checkout-btn text-dark">PROCCED TO
                                            CHECKOUT</a>
                                        {{-- you add a pop modal for making a login --}}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
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

</div>

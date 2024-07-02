<!-- Central Modal Medium Success -->
<style>
    /* error-icon */
    .error-icon {
        display: inline-block;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: red;
        position:relative;
        color: white;
        font-weight: bold;
        font-size: 30px;
        text-align: center;
        line-height: 50px;
    }
    .error-icon:before {
        content: "!";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
    }
</style>



<div class="modal modal-large fade" id="show_Order_Status_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div  align="center" class="modal-dialog modal-notify modal-success modal-xl" role="document" >
        <!--Content-->
        <div class="modal-content">
        <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Order Status for Order Number : {{session('Order_id')}} </p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <!-- Order Status Table-->
                @if(session('Order_Cancel_Status')==0)
                    @if(session('Order_Cancel_Status') == 1)
                        <p class="animated rotateIn">
                            <i class="fas fa-ban fa-3x"></i>
                        </p>
                        <h3>Order Cancelled</h3>

                    @elseif (session('Shipping_Status') == 'pending' && session('Delivery_Status') == 'pending' && session('p_status') == 'pending')
                        <p class="animated rotateIn">
                            <div class="waiting-icon"></div>
                        </p>
                        <h3>Order Pending</h3>

                    @elseif (session('Shipping_Status') == 'shipped' && session('Delivery_Status') == 'pending' && session('p_status') == 'pending')
                        <p class="animated rotateIn">
                            <i class="fas fa-truck fa-3x"></i>
                        </p>
                        <h3>Order Shipped Successfully</h3>

                    @elseif (session('Shipping_Status') == 'shipped' && session('Delivery_Status') == 'delivered' && session('p_status') == 'pending')
                        <p class="animated rotateIn">
                            <i class="fas fa-box fa-3x"></i>
                        </p>
                        <h3>Order Delivered Successfully</h3>

                    @elseif (session('Shipping_Status') == 'shipped' && session('Delivery_Status') == 'retrieved' && session('p_status') == 'pending')
                        <p class="animated rotateIn">
                            <i class="fas fa-check-circle fa-3x"></i>
                        </p>
                        <h3>Order Retrieved Successfully</h3>

                    @elseif (session('Shipping_Status') == 'shipped' && session('Delivery_Status') == 'delivered' && session('p_status') == 'paid')
                        <p class="animated rotateIn">
                            <i class="fas fa-check-circle fa-3x"></i>
                        </p>
                        <h3>Order Completed Successfully</h3>

                    @else
                    <p class="animated rotateIn ">
                        <div class="error-icon"></div>
                    </p>
                        <h4 style="color: red">There is an error with your order. Please contact customer service to resolve it</h4><a href="https://console.dialogflow.com/api-client/demo/embedded/cb47dc52-b61f-46da-afa4-5339d7986703" target="_blank"
                        style=" font-family: 'Balsamiq Sans', cursive;"><u> &#9829; GIFT STORE &#9829;</u></a>
                    @endif

                    <script src="script.js"></script>






                    <!--Grid column-->
                    <div class="row wow fadeIn">
                        <div class="col-md-12 ">
                            <!--Card-->
                            <div class="card">
                            <!--Card content-->
                                <div class="card-body">
                                    <!-- Table  -->
                                    <table class="table table-hover">
                                        <tr>
                                            <th><i class="fas fa-shipping-fast "></i> Shipping  Status</th>
                                            <td>
                                                {{session('Shipping_Status')}}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th><i class="fas fa-truck "></i> Delivery  Status:</th>
                                            <td>
                                                    {{session('Delivery_Status')}}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th><i class="fas fa-money-check "></i> Payment Status:</th>
                                            <td>
                                                @if(session('p_status')=='pending')
                                                {{session('p_status')}}
                                                @else
                                                    {{session('p_status')}}
                                                @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                            <i class="currency-symbol"> £</i>&nbsp;&nbsp;Payment Mode:</th>
                                            <td>
                                                {{session('paymentmode')}}
                                            </td>
                                        </tr>

                                    </table>

                                </div>
                            </div>
                            <!--/.Card-->
                        </div>
                        <!--Grid column-->
                    </div>


                <!--Grid row-->
                @else
                    <p class=" animated rotateIn">
                    <i class="fas fa-ban fa-3x"></i>
                    </p>
                    <h3>This Order Was Cancelled {{session('Order_Cancelled_On')}}</h3>
                @endif
            </div>


            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Success-->

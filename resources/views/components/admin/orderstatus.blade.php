<!-- Central Modal Medium Success -->
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

                        {{-- <i class="fas fa-check-circle fa-3x"></i> --}}
                        {{-- <i class="fas fa-ban fa-3x"></i> --}}
                        {{-- <i class="fas fa-truck fa-3x"></i> --}}
                        {{-- <i class="fas fa-box fa-3x"></i> --}}
                        {{-- <i class="fas fa-undo-alt fa-3x"></i> --}}
                        {{-- <i class="fas fa-truck "> --}}
            <!--Body-->
            <div class="modal-body">

                <!-- Order Status Table-->
                @if(session('Order_Cancel_Status') == 1)
                    <p class="animated rotateIn">
                        <i class="fas fa-ban fa-3x"></i>
                    </p>
                    <h3>Order Cancelled</h3>

                @elseif (session('Shipping_Status') == 'pending' && session('Delivery_Status') == 'pending' && session('p_status') == 'pending')
                    <p class="animated rotateIn">
                        <i class="waiting-icon"></i>
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
                    <h2>Order Paid Successfully</h2>
                    <h3 style="color:chartreuse">Order Completed Successfully</h3>

                @else
                    <p class="animated rotateIn ">
                        <span class="error-icon"></span>
                    </p>
                        <h3 style="color: red">Tracking this request because there is an error</h3>
                    @endif

                    <script src="script.js"></script>





                <!--Grid row-->
                <div class="row wow fadeIn">
                    <!--Grid column-->
                    <div class="col-md-12 ">
                        <!--Card-->
                        <div class="card">
                            <!--Card content-->
                            <div class="card-body">

                                <!-- Table  -->
                                <table class="table table-hover">
                                    <tr>
                                        <th><i class="fas fa-shipping-fast "></i>Shipping Status :</th>

                                        @if(session('Order_Cancel_Status')==1)
                                        <td class="disabled" alt="Disaled">
                                        @else
                                        <td>
                                        @endif

                                        <form action="admin-Update-Shipping-Status" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{session('Order_id')}}" name="Order_id">
                                                    <select name="Shipping_Status">
                                                        <option value="{{session('Shipping_Status')}}" hidden>{{session('Shipping_Status')}}</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="shipped">Shipped</option>
                                                    </select>&nbsp;&nbsp;&nbsp;
                                        <button type="submit">Update</button>
                                        </form>
                                        </td>
                                        </td>
                                    </tr>



                                    <tr>
                                        <th><i class="fas fa-truck"></i> Delivery Status :</th>

                                        @if(session('Order_Cancel_Status')==1)
                                        <td class="disabled" alt="Disaled">
                                        @else
                                        <td>
                                        @endif

                                        <form action="admin-Update-Delivery-Status" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{session('Order_id')}}" name="Order_id">
                                                    <select name="Delivery_Status">
                                                        <option value="{{session('Delivery_Status')}}" hidden>{{session('Delivery_Status')}}</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="delivered">Delivered</option>
                                                    <option value="retrieved">Retrieved</option>
                                                    </select>&nbsp;
                                        <button type="submit">Update</button>&nbsp;&nbsp;&nbsp;
                                        <label>&nbsp; {{session('Delivery_Date')}}</label>
                                        </form>
                                        </td>
                                        </td>
                                    </tr>



                                <tr>
                                    <th><i class="fas fa-money-check "></i> Payment Status :</th>

                                    @if(session('Order_Cancel_Status')==1)
                                        <td class="disabled" alt="Disaled">
                                        @else
                                        <td>
                                        @endif

                                    <form action="admin-Update-Payment-Status" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{session('Order_id')}}" name="Order_id">
                                        <select name="p_status">
                                        <option value="{{session('p_status')}}" hidden>{{session('p_status')}}</option>
                                        <option value="pending">Pending</option>
                                        <option value="paid">Paid</option>
                                        </select>&nbsp;&nbsp;&nbsp;
                                        <button type="submit">Update</button>
                                    </form>
                                    </td>
                                    </td>
                                </tr>


                                <tr>
                                    <th><i class="currency-symbol"> £</i>&nbsp;&nbsp;Payment Mode :</th>
                                    @if(session('Order_Cancel_Status')==1)
                                    <td class="disabled" alt="Disaled">
                                    @else
                                    <td>
                                    @endif

                                    <form action="admin-Update-paymentmode-Status" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{session('Order_id')}}" name="Order_id">

                                    <select name="paymentmode">
                                        <option value="{{session('paymentmode')}}" hidden>{{session('paymentmode')}}</option>
                                        <option value="Online">Online</option>
                                        <option value="COD">COD</option>
                                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="submit">Update</button>
                                    </form>
                                    </td>
                                    </td>
                                </tr>

                                </table>
                                <!-- Table  -->
                            </div>
                        </div>
                        <!--/.Card-->
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->



                        <p align="left" style="color:red"><br>Note:
                        <ul align="left" style="color:red">
                            @if(session('Order_Cancel_Status')==1)
                                <li>
                                    It is not possible to update the delivery and shipping status of the cancelled orders...
                                </li>
                                <li>Click <a href="{{url('admin-Order-Re-Cancel/'.session('Order_id').'')}}" >Here</a> to not cancel this order</li>
                            @else
                                <li>
                                    It is not possible to update the delivery status for multiple times
                                </li>
                                @endif
                        </ul>
                        </p>

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

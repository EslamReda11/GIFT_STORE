<?php $__env->startSection('title'); ?>
    GIFT STORE-MyProfile
<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>
    Home,About,Contact,Car
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <style>
        @media (max-width: 768px) {
            #profileimage {
                width: 60%;
            }
        }

        @media (min-width: 768px) {
            #profileimage {
                width: 100%;
            }
        }
    </style>

    <div class="px-5 py-2" style="background:#1CD5E8;margin-top:5px;">


        <h5 class="my-3"> <span class="fas fa-bars fa-1x" style="font-size:20px;cursor:pointer;color:black;"
                onclick="openNav()"></span> <a href="/" class="black-text">Home></a> <strong class="black-text"> <a
                    href="" class="black-text">Dashboard </a> </strong> </h5>


    </div> <br><br>

    <div id="mySidenav" class="sidenav">
        <br><br>

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
            style="color:white;font-size:30px;margin-left:20px;margin-top:80px;">x</a><br>
        <a style="text-decoration:underline;font-weight:bold;color:#8C8989 ">Dashboard</a>
        <a href="<?php echo e(url('dashboard')); ?>"> <i class="fas fa-user"></i>  Profile</a>

        <a href="<?php echo e(url('profile')); ?>"> <img src="<?php echo e(asset('assets/edit.png')); ?>" alt="" style="width:30px;height:35px;">Edit My Profile</a>

        <a href="<?php echo e(url('Orders')); ?>"> <i class="fas fa-table"></i>  Orders</a>
        <a href="<?php echo e(url('Payments')); ?>"> <i class="fas fa-receipt"></i>  Payments</a>
        <a href="<?php echo e(url('cart')); ?>"><img src="<?php echo e(asset('assets/cart.png')); ?>" alt="" style="width:30px;height:40px;">  Go to Cart</a>
        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-in-alt"></i> <?php echo e(__('Logout')); ?></a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>


    <!-- Home Section Starts Here-->
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-4">
                <div align="left">
                    <?php if(Auth::user()->image == ''): ?>
                    <img src="Uploads/profiles/person.png" alt="User Image"
                        class="rounded-circle mx-5" style="width:50%">
                <?php else: ?>
                    <img src="<?php echo e(asset('Uploads/profiles/' . Auth::user()->image . '')); ?>"
                        alt="<?php echo e(Auth::user()->image); ?>" class="card-img-top  animated pulse infinite slow img-fluid mx-5" style="width:auto;height: auto;">
                <?php endif; ?>
                </div>

            </div>
            <div class="col-md-5  py-5 my-3">

                <!-- Heading -->
                <div class="card  wow fadeIn" id="userdashboardcontent">

                    <!--Card content-->
                    <div class="card-body  d-sm-flex justify-content-between">

                        <ul style="list-style: none; ">
                            <li><strong>Name:</strong> <?php echo e(Auth::user()->name); ?></li>
                            <li><strong>Email-Id:</strong> <?php echo e(Auth::user()->email); ?></li>
                            <li><strong>Address:</strong> <?php echo e(Auth::user()->address1); ?>,
                                <?php echo e(Auth::user()->address2); ?>,
                                <?php echo e(Auth::user()->city); ?> -
                                <?php echo e(Auth::user()->pincode); ?>,
                                <?php echo e(Auth::user()->state); ?>,
                                <?php echo e(Auth::user()->country); ?></li>

                            </li>

                            <li><strong>Mobile Number:</strong><?php echo e(Auth::user()->mnumber); ?></li>

                            <li style="float:left;"><strong>Alternative Mobile No:
                                </strong><?php echo e(Auth::user()->alternativemno); ?>

                                <a href="<?php echo e(url('profile')); ?>" class="btaobtn btaobtn-outline-dark p-2">Edit</a>
                            </li>

                        </ul>



                    </div>

                </div>

            </div>
            <div align="center" class="col-md-12">
                <a href="<?php echo e(url('cart')); ?>" class="btaobn btaobtn-outline-danger px-3 py-3 mx-3">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="basket-item-count">
                        <span class="badge badge-pill red"> <?php echo e(count((array) session('cart'))); ?> </span>
                    </span>
                    <span style="font-size:20px;">Go to Cart<i class="fas fa-long-arrow-alt-right  mx-1"></i>
                    </span>
                </a>
            </div>
        </div>

    </div>
    <br>

    <!-- Home Section Ends Here-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-Store\resources\views/dashboards/user/index.blade.php ENDPATH**/ ?>
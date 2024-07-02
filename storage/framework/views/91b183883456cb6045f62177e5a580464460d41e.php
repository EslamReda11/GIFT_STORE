<style>
    @media (min-width: 768px) {
        #db_store_Logo {
            margin-left: -75px;
        }
    }

    #SearchIcon:hover {
        cursor: pointer;
    }
</style>
<script>
    $(document).ready(function() {
        $('#SearchIcon').click(function(e) {
            var searchstring = $('.searchstring').val();
            // window.alert(searchstring);
            if (searchstring == '') {
                alert("Please enter a search query.");
                window.location.replace("/");
            } else {
                window.location.replace("/Shop/" + searchstring);
            }


        });
    });


    //  $(document).ready(function() {
    //         $('#SearchIcon').click(function(e) {
    //             var searchstring = $('.searchstring').val();
    //             // Check if the search string is empty or not equal to $item
    //             if (searchstring == '') {
    //                 alert("Please enter a search query.");
    //             } else if (searchstring == name) {
    //                 alert("Product not found.");
    //             } else {
    //                 window.location.replace("/Shop/" + searchstring);
    //             }
    //         });
    //     });
</script>

<!-- ======= Header ======= -->
<header id="header" class="z-depth-1" style="position:fixed;top:0px;width:100%;font-family: 'Balsamiq Sans', cursive;">
    <div class="container d-flex">

        <div id="db_store_Logo" class="logo mr-auto">
            <a href="/"><img src=" <?php echo e(asset('assets/img/LogoGIFTSTORE.png')); ?>" alt="" class="img-fluid"></a>

        </div>
        <div class="col-md-4">
            <div class="input-group md-form form-sm  " style="width:100%;">
                <input class="form-control my-0 py-1 red-border searchstring" list="plists" name="plist"
                    id="plist" type="text" placeholder="Search" aria-label="Search">
                <datalist id="plists">
                    <?php
                        $Products = App\Models\Products::where('status', '=', '1')->get();
                    ?>
                    <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->url); ?>"><?php echo e($item->name); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </datalist>

                <div class="input-group-append" id="SearchIcon">
                    <span class="input-group-text  lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <p class="mobile-nav-toggle"><i class="fas fa-bars"></i> </p>
        <nav class="nav-menu d-none d-lg-block contentfont">

            <ul style="margin-top:5px;">

                <li class="active"><a href="/">Home</a></li>
                <li><a href="/#About">About</a></li>
                <li><a href="/#Products">Products</a></li>
                <li><a href="/#Contact">Contact</a></li>

                <li><a href="<?php echo e(url('about')); ?>" target="_blank">Team</a></li>


                <li><a href="<?php echo e(url('Help')); ?>"><i class="fas fa-headset"></i> Help</a></li>

                <?php if(Route::has('login')): ?>

                    <?php if(auth()->guard()->check()): ?>
                        <li class="drop-down"><a href="#"> <i class="far fa-user-circle "></i> My Account <i
                                    class="fas fa-angle-down"></i></a>
                            <ul align="left">
                                <li><a href="<?php echo e(url('admin-dash')); ?>"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                </li>
                                <li><a href="<?php echo e(url('dashboard')); ?>"><i class="fas fa-user"></i> Profile</a></li>
                                <li><a href="<?php echo e(url('Orders')); ?>"> <i class="fas fa-table"></i> Orders</a></li>
                                <li><a href="<?php echo e(url('Payments')); ?>"><i class="fas fa-receipt"></i> Transactions</a></li>
                                <a href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i
                                        class="fas fa-sign-in-alt"></i> <?php echo e(__('Logout')); ?></a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                        </li>
                </ul>
                </li>
            <?php else: ?>
                <li> <a href="<?php echo e(route('login')); ?>">Login</a> </li>

                <?php if(Route::has('register')): ?>
                    <li> <a href="<?php echo e(route('register')); ?>">Register</a> </li>
                <?php endif; ?>
            <?php endif; ?>

            <?php endif; ?>



            <li><a href="<?php echo e(url('cart')); ?>" style="margin-left:15px;"> <i class="fas fa-shopping-cart fa-2x"></i>
                    <span class="basket-item-count" style="margin-left:-4px;">
                        <span class="badge badge-pill red"> <?php echo e(count((array) session('cart'))); ?> </span>
                    </span></a></li>

            </ul>

        </nav><!-- .nav-menu -->

    </div>


               
         <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
         <df-messenger
         chat-icon="<?php echo e(asset('Img/2.png')); ?>"
         intent="WELCOME"
         chat-title="GIFT STORE"
         agent-id="cb47dc52-b61f-46da-afa4-5339d7986703"
         language-code="en"
         ></df-messenger>
         <style>
             df-messenger
             {
                --df-messenger-bot-message: #5c3940;
                --df-messenger-button-titlebar-color: #fffff;
                --df-messenger-button-titlebar-font-color:#7d0707;
                --df-messenger-chat-background-color: rgb(226, 190, 179);
                --df-messenger-font-color: #fff;
                --df-messenger-user-message: #4b5863;
             }
             /* 1.png --> https://i.imgur.com/Js3ZB0j.png */
             /* 2.png --> https://i.imgur.com/QLFNYOf.png */

         </style>
         


        <!-- Buttonup -->
        <a class="buttonup" href="#">
            <svg class="svgIconup" viewBox="0 0 384 512">
                <path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"></path>
            </svg>
        </a>

        <!-- Buttondown -->
        <a class="buttondown" href="#bottom">
            <svg class="svgIcondown" viewBox="0 0 384 512">
                <path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v306.8L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
            </svg>
        </a>

</header>
<br><br><br>


<?php /**PATH C:\xampp\htdocs\E-Store\resources\views/Reusable_components/user/header.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
GIFT STORE-Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    Login in GIFT STORE
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div align="center" class="container-fluid my-3 animated bounceIn">

        <div class="col-md-2">
            <a href="/">
                <img src="<?php echo e(asset('assets/img/Logo-Square.PNG')); ?>" class="img-fluid px-2 py-2" style="width:200px;">
            </a>
        </div>
        <h5 class="my-2" style="font-weight: 900">Login</h5><br>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group row justify-content-center">

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                name="email" value="<?php echo e(old('email')); ?>" required placeholder="<?php echo e(__('E-Mail Address')); ?>"
                                autocomplete="email" autofocus>

                            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required
                                placeholder="<?php echo e(__('Password')); ?>" autocomplete="current-password">

                            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    <div class="form-group row ">
                        <div class="col-md-6 offset-md-3">
                            <div class="form-check" align="left">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                <label class="form-check-label" for="remember">
                                    <?php echo e(__('Remember Me')); ?>

                                </label> <br>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0 justify-content-center">
                        <div class="col-md-12 ">
                            

                            <button class="button">
                                <div class="blob1"></div>
                                <div class="blob2"></div>
                                <div class="inner"> <?php echo e(__('Login')); ?></div>
                             </button>


                            <?php if(Route::has('password.request')): ?>
                                <a class="btn btn-link col-md-12" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Forgot Your Password?')); ?>

                                </a>
                            <?php endif; ?>
                            <strong>Not Having an Account! <br>Then <a href="register"><u>Create a New
                                        Account</u></a></strong>
                        </div>


                        


                        <div class="col-md-12 ">
                            <p class="my-2">
                                <a class="black-text" href="/">
                                    <i class="fas fa-arrow-left"></i>
                                    Back to GIFT STORE
                                </a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <br>





<footer id="footer" class="page-footer font-small  pt-4" style="background:indigo;">
    <div class="container text-center text-md-left">
        <div class="row d-flex align-items-center">
            <div class="col-md-7 col-lg-8">

                <a href="/">
                    <strong>GIFT STORE</strong>
                </a>
                <br>
                <span>&#169;All Right Reserved . Designed By <a href="https://github.com/EslamReda11" target="_blank"
                        style=" font-family: 'Balsamiq Sans', cursive;"><u>Eng.Eslam Reda</u><img src="<?php echo e(asset('assets/github.png')); ?>" width="20px" height="20px" alt=""></a> </span>
                </p>
            </div>


            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/EslamReda10001/" target="_blank"><img src="<?php echo e(asset('assets/facebook.ico')); ?>" width="30px" height="30px" alt=""></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://x.com/_EslamReda?t=iyAGPnDPnznfeoVVWK565g&s=09" target="_blank"><img src="<?php echo e(asset('assets/X.png')); ?>" width="30px" height="30px" alt=""></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/eslamreda1236?igsh=NjU4a2R0emNqMjMy" target="_blank"><img src="<?php echo e(asset('assets/instagram.png')); ?>" width="30px" height="30px" alt=""></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/eslam-reda-86a216243/" target="_blank"><img src="<?php echo e(asset('assets/linkedin.png')); ?>" width="30px" height="30px" alt=""></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://github.com/EslamReda11" target="_blank"><img src="<?php echo e(asset('assets/github.png')); ?>" width="30px" height="30px" alt=""></a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    
    <div id="bottom"></div>
</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-Store\resources\views/auth/login.blade.php ENDPATH**/ ?>
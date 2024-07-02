<?php $__env->startSection('title'); ?>
    GIFT STORE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>
    Home,About,Contact,Car
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div align="center" style="background:#1CD5E8;padding:20px;">
        <h3 class="black-text" style="font-weight:bold;"><a href="<?php echo e(url('admin-dash')); ?>">Admin Dashboard</a></h3>

        <p class="white-text" style="font-weight:bold;">
            <a href="<?php echo e(url('admin-products')); ?>" class="badge badge-pill btn-outline-green px-3 py-2"> <i
                    class="fas fa-file-powerpoint"></i> &nbsp; Show All Products</a>

            <a href="<?php echo e(url('admin-add-product')); ?>" class="badge badge-pill btn-outline-dark   px-3 py-2"> <i
                    class="fas fa-plus"></i> &nbsp; Add New Product</a>
            <a href="<?php echo e(url('admin-bin-products')); ?>" class="badge badge-pill btn-outline-danger px-3 py-2"><i
                    class="fas fa-dumpster"></i> Recycle Bin</a>

        </p>
        <?php if(session('status')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>


    </div>



    <div class="container py-5">
        <p align="left">
            <i class="fas fa-dumpster"></i> Recently Deleted Products
        </p>
        <div cla <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead align="center" style="background-color:cadetblue ">

                            <th style="font-size:larger;font-weight:bold;">Name</th>
                            <th style="font-size:larger;font-weight:bold;">Description</th>
                            <th style="font-size:larger;font-weight:bold;">Images</th>
                            <th style="font-size:larger;font-weight:bold;">Price</th>
                            <th style="font-size:larger;font-weight:bold;">Show/Hide</th>
                            <th style="font-size:larger;font-weight:bold;">Action</th>

                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td align="center"><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->description); ?></td>


                                    <td align="center">
                                        <img src="<?php echo e(asset('Uploads/Products/' . $item->image1)); ?>" width="50px;"
                                            alt="<?php echo e($item->image1); ?>" />
                                        <img src="<?php echo e(asset('Uploads/Products/' . $item->image2)); ?>" width="50px;"
                                            alt="<?php echo e($item->image2); ?>" />
                                        <img src="<?php echo e(asset('Uploads/Products/' . $item->image3)); ?>" width="50px;"
                                            alt="<?php echo e($item->image3); ?>" />
                                        <img src="<?php echo e(asset('Uploads/Products/' . $item->image4)); ?>" width="50px;"
                                            alt="<?php echo e($item->image4); ?>" />


                                    </td>
                                    <td align="center"><?php echo e($item->price); ?></td>

                                    <td align="center">
                                        <?php
                                        if ($item->status == 1) {
                                            echo '<p class="badge badge-pill btn-success"><i class="fas fa-check "></i></p>';
                                        } else {
                                            echo '<p class="badge badge-pill btn-danger"><i class="fas fa-times"></i></p>';
                                        }
                                        ?>
                                    </td>
                                    <td align="center">
                                        <a href="<?php echo e(url('admin-product-restore/' . $item->id)); ?>"
                                            class="badge badge-pill btn-warning px-3 py-2">Restore</a><br><br>
                                        <a href="<?php echo e(url('admin-product-delete-confirm/' . $item->id)); ?>"
                                            class="badge badge-pill btn-danger px-3 py-2">Delete Permanently</a>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-Store\resources\views/dashboards/admin/Products/bin.blade.php ENDPATH**/ ?>
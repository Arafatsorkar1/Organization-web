<?php $__env->startSection('title','Details'); ?>

<?php $__env->startSection('body'); ?>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-5   ">
                    <div>
                        <img src="<?php echo e(asset($content->image)); ?>" alt="" style="height: 280px; width: 300px">
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="text-center">


                        <h3><?php echo e($content->name); ?></h3>

                    </div>

                    <div><h2><?php echo e($content->short); ?></h2></div>

                    <div class="mt-10">

                        <p class="text-muted"><?php echo e($content->long); ?></p>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\clients_side\resources\views/front/home/futureProject.blade.php ENDPATH**/ ?>
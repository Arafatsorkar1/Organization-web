<?php $__env->startSection('title', ' file'); ?>

<?php $__env->startSection('body'); ?>



    <div class="main-content">

        <!-- Section: inner-header -->
        <section class="" data-bg-img="">
            <div class="container  pb-50">
                <!-- Section Content -->
                <div class="section-content ">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center text-black">All Occopetion List</h3>
                        </div>
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Causes -->
        <section>
            <div class="container pb-30">
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        <div class="col-sm-12 col-md-12">






                            <div class="causes bg-white maxwidth500 clearfix mb-40">




                                <div class="col-md-12">
                                    <div class="causes-details clearfix p-15 pt-0 pb-10 pl-0">
                                        <h4 class="font-weight-600 mt-0"><a href="#"> </a></h4>
                                        <p class="border-bottom pb-15">

                                        <div class="table-responsive">

                                            <table class="table baseDataTable table-striped table-hover table-bordered ">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th >Title</th>
                                                    <th >Occopetation</th>








                                                </tr>
                                                </thead>


                                                <tbody>
                                                <?php $__currentLoopData = $occopetion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $occo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>

                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($occo->name); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(asset($occo->pdf)); ?>" download class="btn btn-group btn-success">download now</a>
                                                        </td>








                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>







                                        <a href="#" class="text-theme-colored ml-5"> </a></p>

                                        <div class="causes mt-20 mb-20">
                                            <div class="progress-item mt-0">

                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>















                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\clients_side\resources\views/front/Training/Occopetion.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title','Manage '); ?>

<?php $__env->startSection('body'); ?>



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Manage Mambers</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-hover baseDataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Session</th>
                                    <th>Occopetation</th>
                                    <th>Trainee Name</th>
                                    <th>Designation</th>
                                    <th>Company Name</th>
                                    <th>Company Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($member->session); ?></td>
                                        <td><?php echo e($member->occopetation); ?></td>
                                        <td><?php echo e($member->trainee_Name); ?></td>
                                        <td><?php echo e($member->name); ?></td>
                                        <td><?php echo e($member->address); ?></td>
                                        <td><?php echo e($member->country); ?></td>

                                        <td>
                                            <a href="<?php echo e(route('members.edit', $member->id)); ?>" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a href="<?php echo e(route('members.show', $member->id)); ?>" class="btn btn-info btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('deleteFrom<?php echo e($member->id); ?>').submit();" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                            <form id="deleteFrom<?php echo e($member->id); ?>" action="<?php echo e(route('members.destroy', $member->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\clients_side\resources\views/back/Member/index.blade.php ENDPATH**/ ?>
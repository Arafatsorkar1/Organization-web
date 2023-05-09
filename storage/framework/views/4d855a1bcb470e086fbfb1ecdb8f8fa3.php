<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="<?php echo e(route('dashboard')); ?>" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Member</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('members.create')); ?>">Add Member</a></li>
                        <li><a href="<?php echo e(route('members.index')); ?>">Manage Member</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Future Project</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('FutureProjects.create')); ?>">Add Project</a></li>
                        <li><a href="<?php echo e(route('FutureProjects.index')); ?>">Manage Project</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Current Project</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('CurrentProjects.create')); ?>">Add Project</a></li>
                        <li><a href="<?php echo e(route('CurrentProjects.index')); ?>">Manage Project</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Gallery</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('gallerys.create')); ?>">Add Picture</a></li>
                        <li><a href="<?php echo e(route('gallerys.index')); ?>">Manage Picture</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Occopetion</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('Files.create')); ?>">Add File</a></li>
                        <li><a href="<?php echo e(route('Files.index')); ?>">Manage File</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Certifications</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('cirtifications.create')); ?>">Add File</a></li>
                        <li><a href="<?php echo e(route('cirtifications.index')); ?>">Manage File</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Assessment</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('assesments.create')); ?>">Add File</a></li>
                        <li><a href="<?php echo e(route('assesments.index')); ?>">Manage File</a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<?php /**PATH D:\php\Banglasoft\basic\htdocs\clients_side\resources\views/back/includes/menu.blade.php ENDPATH**/ ?>
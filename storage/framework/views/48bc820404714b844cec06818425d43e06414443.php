<?php $__env->startSection('content'); ?>
    <section class="login white-bg o-hidden scrollbar">
        <div class="container-fluid p-0">
            <div class="row row-eq-height no-gutter height-100vh">
                <div class="col-md-6 parallax" style="background-image: url(<?php echo e(asset('images/login.jpg')); ?>);">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="vertical-align full-width">
                        <div class="login-14">
                            <h1>Sign Up</h1>
                            <?php if(session()->has('message')): ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <i class="fa fa-check-circle"></i> <?php echo session()->pull('message') ?>
                                </div>
                            <?php endif; ?>
                            <div class="pb-50 clearfix white-bg">
                                <form method="POST" action="<?php echo e(route('register')); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="name">Full name* </label>
                                        <input id="name" class="form-control" required type="text" value="<?php echo e(old('name')); ?>" placeholder="Full name" name="name">
                                        <?php if($errors->has('name')): ?>
                                            <span class="text-danger">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="email">Email Address* </label>
                                        <input type="email" id="email" required placeholder="Email" value="<?php echo e(old('email')); ?>" class="form-control" name="email">
                                        <?php if($errors->has('email')): ?>
                                            <span class="text-danger">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="password">Password* </label>
                                        <input id="password" class="form-control" required type="password" placeholder="Password" name="password">
                                        <?php if($errors->has('password')): ?>
                                            <span class="text-danger">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="password-confirm">Confirm Password* </label>
                                        <input id="password-confirm" class="form-control" required type="password" placeholder="Confirm Password" name="password_confirmation">
                                    </div>
                                    <button type="submit" class="button btn-block">
                                        <span>Signup</span>
                                    </button>
                                </form>
                                <p class="mt-20 mb-0 text-center">Already have an account? <a href="<?php echo e(url('login')); ?>"> Sign in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
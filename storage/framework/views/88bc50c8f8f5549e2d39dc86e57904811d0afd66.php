<?php $__env->startSection('content'); ?>
    <section class="login white-bg o-hidden scrollbar">
        <div class="container-fluid p-0">
            <div class="row row-eq-height no-gutter height-100vh">
                <div class="col-md-6 parallax" style="background-image: url(<?php echo e(asset('images/login.jpg')); ?>);">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="vertical-align full-width">
                        <div class="login-14">
                            <h1>Login</h1>
                            <?php if(session()->has('message')): ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
                                    <i class="fa fa-check-circle"></i> <?php echo e(session()->pull('message')); ?>

                                </div>
                            <?php endif; ?>
                            <div class="pb-50 clearfix white-bg">
                                <form method="POST" action="<?php echo e(route('login')); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="email">Email Address</label>
                                        <input id="email" class="form-control" type="email" value="<?php echo e(old('email')); ?>" placeholder="Email Address" name="email" required>
                                        <?php if($errors->has('email')): ?>
                                            <div class="text-danger">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="password">Password</label>
                                        <input id="password" class="form-control" type="password" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="section-field">
                                        <div class="remember-checkbox mb-30">
                                            <input type="checkbox" class="form-control" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> />
                                            <label for="remember"> Remember me</label>
                                            <a href="<?php echo e(route('password.request')); ?>" class="pull-right">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="button btn-block">
                                        <span>Log in</span>
                                    </button>
                                    <p class="mt-20 mb-0 text-center">Don't have an account? <a href="<?php echo e(url('register')); ?>"> Create one here</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
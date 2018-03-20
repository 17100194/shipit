<?php $__env->startSection('content'); ?>
    <section class="slider-parallax popup-video-banner bg-overlay-black-50 parallax" style="background: url(<?php echo e(asset('images/home.jpg')); ?>)">
        <div class="slider-content-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="slider-content text-center">
                            <p class="text-white mt-20">Fast. Global. Shopping.</p>
                            <h1 class="text-white">Get anything in the world delivered to you by a trusted traveler</h1>
                            <div class="mt-20">
                                <a class="button" href="<?php echo e(url('login')); ?>"> Get Started </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="scroll-down move" title="Scroll Down" href="#about-us"><i></i></a>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="hero-section" style="background-image: url('<?php echo e(asset('images/Cover.jpeg')); ?>'); background-size: cover; height: 400px; text-align: center; padding: 100px 0; color: white;">
    <div class="container">
        <a href="#" class="btn btn-primary" style="padding: 10px 30px; background-color: #007bff;">Hire Us</a>
        <h1>Experience Excellence Through<br /> Our Tailored Services</h1>
        <p>Unlock unparalleled expertise by accessing our tailored services,<br /> designed to elevate your experience and<br />meet your unique needs</p>

    </div>
</section>

<!-- Services Section -->
<section class="services-section" style="padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center"> <!-- First tile in the first row -->
                <div class="service-box" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px;">
                    <img src="<?php echo e(asset('images/photography.jpeg')); ?>" alt="photography" style="width:100%; height: 300px;">
                    <h3>Photography Coverage</h3>
                </div>
            </div>

            <div class="col-md-6 text-center"> <!-- Second tile in the first row -->
                <div class="service-box" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px;">
                    <img src="<?php echo e(asset('images/vediography.jpeg')); ?>" alt="vediography" style="width:100%; height: 300px;">
                    <h3>Videography Coverage</h3>
                </div>
            </div>
        </div> <!-- End of first row -->

        <div class="row">
            <div class="col-md-6 text-center"> <!-- First tile in the second row -->
                <div class="service-box" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px;">
                    <img src="<?php echo e(asset('images/Livestreaming.jpeg')); ?>" alt="Livestreaming" style="width:100%; height: 300px;">
                    <h3>Live Streaming</h3>
                </div>
            </div>

            <div class="col-md-6 text-center"> <!-- Second tile in the second row -->
                <div class="service-box" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px;">
                    <img src="<?php echo e(asset('images/Media.jpeg')); ?>" alt="Media" style="width:100%; height: 300px;">
                    <h3>Media Reporting</h3>
                </div>
            </div>
        </div> <!-- End of second row -->
    </div>
</section>


<!-- <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout01', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Danishma\Desktop\LaravelPro\TaskProject\taskApp\resources\views/pages/service.blade.php ENDPATH**/ ?>
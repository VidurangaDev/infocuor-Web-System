<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
    <?php echo $__env->make('libraries.boostrapstyle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        /* Full height for the body and html */
        html,
        body {
            height: 100%;
            margin: 0;
        }

        /* Flexbox layout: full-page wrapper */
        .content-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Full viewport height */
        }

        /* Main content that will take up remaining space */
        .main-content {
            flex: 1;
            /* This makes sure the content expands to take up the space */
        }

    </style>
</head>

<body>

    <!-- Main content wrapper -->
    <div class="content-wrapper">
        <!-- Navbar -->
        <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Main content -->
        <div class="container main-content my-5">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <!-- Footer fixed at the bottom -->
        <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo $__env->make('libraries.boostrapscript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\Users\Danishma\Desktop\LaravelPro\TaskProject\taskApp\resources\views/layouts/layout01.blade.php ENDPATH**/ ?>
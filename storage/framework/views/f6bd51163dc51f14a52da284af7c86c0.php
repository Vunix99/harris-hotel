<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Hotel Harris || Room </title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon"
        href="<?php echo e(asset('https://www.discoverasr.com/content/dam/tal/common/assets/logos/brands/tauzia/harris/harris-logo-132x80.png')); ?>"
        type="image/x-icon">


    <!-- Flaticon -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/flaticon.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome-5.14.0.min.css')); ?>">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.min.css')); ?>">
    <!-- Nice Select -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.min.css')); ?>">
    <!-- Type Writer -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery.animatedheadline.css')); ?>">
    <!-- Animate -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
    <!-- Slick -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.min.css')); ?>">
    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />


</head>

<body class="home-one">
    <?php if(isset($preload)): ?>
        <?php echo $__env->make('partials.prelod', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- == main content area starts == -->
    <div>

        <?php echo $__env->yieldContent('container'); ?>

        <button class="scroll-top scroll-to-target" data-target="html"><span
                class="fas fa-angle-double-up"></span></button>
        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>


    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="<?php echo e(asset('assets/js/map.js')); ?>"></script>
    

    <!-- Jquery -->
    <script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <!-- Appear Js -->
    <script src="<?php echo e(asset('assets/js/appear.min.js')); ?>"></script>
    <!-- Slick -->
    <script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
    <!-- Nice Select -->
    <script src="<?php echo e(asset('assets/js/jquery.nice-select.min.js')); ?>"></script>
    <!-- Image Loader -->
    <script src="<?php echo e(asset('assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
    <!-- Calendar -->
    <script src="<?php echo e(asset('assets/js/calendar.global.min.js')); ?>"></script>
    <!-- Skillbar -->
    <script src="<?php echo e(asset('assets/js/skill.bars.jquery.min.js')); ?>"></script>
    <!-- Circle Progress -->
    <script src="<?php echo e(asset('assets/js/circle-progress.min.js')); ?>"></script>
    <!-- Isotope -->
    <script src="<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>"></script>
    <!--  WOW Animation -->
    <script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script>
    <!-- Custom script -->
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>

</body>

</html>
<?php /**PATH /home/glo/Documents/DokumenAne/harris-hotel/resources/views/layout/main.blade.php ENDPATH**/ ?>
<?php $__env->startSection('container'); ?>
    <div class="page-wrapper">
        <!-- Page Banner Start -->
        <section class="page-banner-area pt-140 rpt-80 pb-240 rpb-150 rel z-1 bgs-cover bgc-black text-center"
            style="background-image: url(assets/images/background/image\ 4.png)">
            <div class="container">
                <div class="banner-inner text-white rpb-25">
                    <h1 class="page-title wow fadeInUp delay-0-2s">Our Room</h1>
                </div>
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Filter Form Start -->
        <div class="container">
            <form action="<?php echo e(route('room-grid')); ?>" method="GET" class="my-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="branch" class="mb-2"
                                style="font-family: 'Poppins', sans-serif; font-size: 16px;">Pilih
                                Cabang Hotel:</label>
                            <select name="branch" id="branch" class="form-control"
                                style="font-family: 'Poppins', sans-serif;">
                                <option value="">Semua Cabang</option>
                                <?php $__currentLoopData = $cabanghotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cabanghotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cabanghotel->id); ?>"
                                        <?php echo e(Request::get('branch') == $cabanghotel->id ? 'selected' : ''); ?>>
                                        <?php echo e($cabanghotel->nama_cabang); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center">
                        <button type="submit" class="btn btn-filter"
                            style="font-family: 'Poppins', sans-serif; font-size: 16px;">Filter</button>
                    </div>
                </div>
            </form>
        </div>


        <!-- Filter Form End -->

        <!-- Rooms Area start -->
        <section class="rooms-grid-area pb-125 rpb-95 rel z-2 mt-100">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $kamars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kamar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-4 col-md-6">
                            <div class="room-item style-two wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="<?php echo e($kamar->image); ?>" alt="Room">
                                    <a class="category"
                                        href="<?php echo e(route('room-details', ['id' => $kamar->id])); ?>"><?php echo e($kamar->tipe_kamar); ?></a>
                                </div>
                                <div class="content">
                                    <h4><a href="<?php echo e(route('room-details', ['id' => $kamar->id])); ?>"><?php echo e($kamar->nama); ?></a>
                                    </h4>
                                    <?php if($kamar->gambar): ?>
                                        <img src="<?php echo e($kamar->gambar); ?>" alt="<?php echo e($kamar->nama); ?>">
                                    <?php endif; ?>
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="far fa-bed-alt"></i>
                                            <a href="#">Adults : <?php echo e($kamar->person); ?></a>
                                        </li>
                                    </ul>
                                    <p><?php echo e(implode(' ', array_slice(str_word_count($kamar->deskripsi, 1), 0, 20))); ?></p>
                                    <div class="price"><span>Rp.
                                            <?php echo e(number_format($kamar->harga, 0, ',', '.')); ?></span>/per night</div>
                                </div>
                                <a class="theme-btn" href="<?php echo e(route('room-details', ['id' => $kamar->id])); ?>">Book Now
                                    <i class="fal fa-angle-right"></i></a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- Pagination Start -->
                    <ul class="pagination pt-10 flex-wrap justify-content-center wow fadeInUp delay-0-2s">
                        
                        <li class="page-item <?php echo e($kamars->onFirstPage() ? 'disabled' : ''); ?>">
                            <a class="page-link" href="<?php echo e($kamars->previousPageUrl()); ?>"><i
                                    class="far fa-arrow-left"></i></a>
                        </li>
                        
                        <?php for($i = 1; $i <= $kamars->lastPage(); $i++): ?>
                            <li class="page-item <?php echo e($kamars->currentPage() == $i ? 'active' : ''); ?>">
                                <a class="page-link" href="<?php echo e($kamars->url($i)); ?>"><?php echo e($i); ?></a>
                            </li>
                        <?php endfor; ?>
                        
                        <li class="page-item <?php echo e($kamars->hasMorePages() ? '' : 'disabled'); ?>">
                            <a class="page-link" href="<?php echo e($kamars->nextPageUrl()); ?>"><i class="far fa-arrow-right"></i></a>
                        </li>
                    </ul>
                    <!-- Pagination End -->
                </div>
            </div>
        </section>
        <!-- Rooms Area end -->



        <!-- Scroll Top Button -->
        <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>
    </div>
    <!--End pagewrapper-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/glo/Documents/DokumenAne/harris-hotel/resources/views/room-grid.blade.php ENDPATH**/ ?>
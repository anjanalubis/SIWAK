


<?php $__env->startSection('content'); ?>


    <div class="d-flex justify-content-between align-items-center mb-4">


        <div>

            <?php if(isset($wisata)): ?>

                <h2>Galeri Wisata</h2>

                <h5 class="text-success">
                    <?php echo e($wisata->nama_wisata); ?>

                </h5>


            <?php elseif(isset($umkm)): ?>

                <h2>Galeri UMKM</h2>

                <h5 class="text-success">
                    <?php echo e($umkm->nama_umkm); ?>

                </h5>


            <?php endif; ?>

        </div>



        <div>


            <?php if(isset($wisata)): ?>


                <a href="<?php echo e(route('galeri.create', $wisata->id)); ?>" class="btn btn-success">

                    + Tambah Foto / Video

                </a>


                <a href="<?php echo e(route('wisata.index')); ?>" class="btn btn-secondary">

                    Kembali

                </a>



            <?php elseif(isset($umkm)): ?>


                <a href="<?php echo e(route('galeri.umkm.create', $umkm->id)); ?>" class="btn btn-success">

                    + Tambah Foto / Video

                </a>


                <a href="<?php echo e(route('umkm.index')); ?>" class="btn btn-secondary">

                    Kembali

                </a>


            <?php endif; ?>


        </div>


    </div>




    <?php if(session('success')): ?>

        <div class="alert alert-success">

            <?php echo e(session('success')); ?>


        </div>

    <?php endif; ?>





    <div class="row">


        <?php $__empty_1 = true; $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>



            <div class="col-lg-4 col-md-6 mb-4">


                <div class="card shadow h-100">



                    <?php if($item->tipe == 'video'): ?>


                        <video controls class="card-img-top" style="height:250px; object-fit:contain; background:#f8f9fa;">

                            <source src="<?php echo e(asset('storage/' . $item->file)); ?>">

                        </video>



                    <?php else: ?>



                        <img src="<?php echo e(asset('storage/' . $item->file)); ?>" class="card-img-top p-2"
                            style="height:250px; object-fit:contain; background:#f8f9fa;">



                    <?php endif; ?>



                    <div class="card-body">


                        <h5 class="card-title">

                            <?php echo e($item->judul); ?>


                        </h5>



                        <p class="text-muted">

                            Tipe : <?php echo e($item->tipe); ?>


                        </p>




                        <a href="<?php echo e(route('galeri.edit', $item->id)); ?>" class="btn btn-warning btn-sm">

                            Edit

                        </a>





                        <form action="<?php echo e(route('galeri.destroy', $item->id)); ?>" method="POST" class="d-inline">


                            <?php echo csrf_field(); ?>

                            <?php echo method_field('DELETE'); ?>


                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus file ini?')">

                                Hapus

                            </button>


                        </form>



                    </div>


                </div>


            </div>



        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>



            <div class="col-12">


                <div class="alert alert-info">

                    Belum ada foto atau video galeri.

                </div>


            </div>



        <?php endif; ?>



    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp88\htdocs\siwak\resources\views/admin/galeri/index.blade.php ENDPATH**/ ?>
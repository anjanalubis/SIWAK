

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <?php if(isset($wisata)): ?>

            <h2>Kontak Wisata</h2>

            <h5 class="text-success">
                <?php echo e($wisata->nama_wisata); ?>

            </h5>

        <?php elseif(isset($umkm)): ?>

            <h2>Kontak UMKM</h2>

            <h5 class="text-success">
                <?php echo e($umkm->nama_umkm); ?>

            </h5>

        <?php endif; ?>

    </div>


    <div>

        <?php if(isset($wisata)): ?>

            <a href="<?php echo e(route('kontak.create',$wisata->id)); ?>"
                class="btn btn-success">

                + Tambah Kontak

            </a>

            <a href="<?php echo e(route('wisata.index')); ?>"
                class="btn btn-secondary">

                Kembali

            </a>

        <?php elseif(isset($umkm)): ?>

            <a href="<?php echo e(route('kontak.umkm.create',$umkm->id)); ?>"
                class="btn btn-success">

                + Tambah Kontak

            </a>

            <a href="<?php echo e(route('umkm.index')); ?>"
                class="btn btn-secondary">

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


<div class="card shadow">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-success">

                    <tr>

                        <th width="60">No</th>

                        <th width="180">Jenis Kontak</th>

                        <th>Link Kontak</th>

                        <th width="180">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $kontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <tr>

                        <td><?php echo e($loop->iteration); ?></td>

                        <td>

                            <span class="badge bg-success">

                                <?php echo e($item->jenis_kontak); ?>


                            </span>

                        </td>

                        <td>

                            <a href="<?php echo e($item->link_kontak); ?>"
                                target="_blank">

                                <?php echo e($item->link_kontak); ?>


                            </a>

                        </td>

                        <td>

                            <a href="<?php echo e(route('kontak.edit',$item->id)); ?>"
                                class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form action="<?php echo e(route('kontak.destroy',$item->id)); ?>"
                                method="POST"
                                class="d-inline">

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus kontak ini?')">

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>

                        <td colspan="4" class="text-center">

                            Belum ada data kontak.

                        </td>

                    </tr>

                <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp88\htdocs\siwak\resources\views/admin/kontak/index.blade.php ENDPATH**/ ?>
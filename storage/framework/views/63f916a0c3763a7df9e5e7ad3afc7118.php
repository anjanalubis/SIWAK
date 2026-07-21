

<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Data Wisata</h2>

        <a href="<?php echo e(route('wisata.create')); ?>" class="btn btn-success">
            + Tambah Wisata
        </a>

    </div>

    <?php if(session('success')): ?>

        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>

    <?php endif; ?>

    <table class="table table-bordered table-hover align-middle">

        <thead class="table-success">

            <tr>

                <th width="50">No</th>
                <th width="130">Cover</th>
                <th>Nama Wisata</th>
                <th>Kategori</th>
                <th>Kecamatan</th>
                <th>Harga Weekday</th>
                <th>Harga Weekend</th>
                <th>Jam Weekday</th>
                <th>Jam Weekend</th>
                <th width="230">Aksi</th>

            </tr>

        </thead>

        <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $wisata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>

                    <td><?php echo e($loop->iteration); ?></td>

                    <td>

                        <?php if($item->gambar_cover): ?>

                            <img src="<?php echo e(asset('storage/' . $item->gambar_cover)); ?>" width="120" class="img-thumbnail">

                        <?php else: ?>

                            <span class="text-danger">
                                Belum ada gambar
                            </span>

                        <?php endif; ?>

                    </td>

                    <td><?php echo e($item->nama_wisata); ?></td>

                    <td><?php echo e($item->kategori->nama_kategori ?? '-'); ?></td>

                    <td><?php echo e($item->kecamatan->nama_kecamatan ?? '-'); ?></td>

                    <td>

                        <?php if($item->harga_weekday): ?>

                            Rp <?php echo e(number_format($item->harga_weekday, 0, ',', '.')); ?>


                        <?php else: ?>

                            -

                        <?php endif; ?>

                    </td>

                    <td>

                        <?php if($item->harga_weekend): ?>

                            Rp <?php echo e(number_format($item->harga_weekend, 0, ',', '.')); ?>


                        <?php else: ?>

                            -

                        <?php endif; ?>

                    </td>

                    <td><?php echo e($item->jam_weekday ?? '-'); ?></td>

                    <td><?php echo e($item->jam_weekend ?? '-'); ?></td>

                    <td>
                        <div class="d-flex gap-2 flex-nowrap">

                            <a href="<?php echo e(route('wisata.edit', $item->id)); ?>" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="<?php echo e(route('galeri.index', $item->id)); ?>" class="btn btn-info btn-sm">
                                Galeri
                            </a>

                            <a href="<?php echo e(route('kontak.index', $item->id)); ?>" class="btn btn-primary btn-sm">
                                Kontak
                            </a>

                            <form action="<?php echo e(route('wisata.destroy', $item->id)); ?>" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button type="submit" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>

                            </form>

                        </div>
                    </td>

                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>

                    <td colspan="10" class="text-center">

                        Belum ada data wisata.

                    </td>

                </tr>

            <?php endif; ?>

        </tbody>

    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp88\htdocs\siwak\resources\views/admin/wisata/index.blade.php ENDPATH**/ ?>
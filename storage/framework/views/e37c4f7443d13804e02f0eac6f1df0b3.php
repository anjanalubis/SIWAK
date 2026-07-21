

<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Data UMKM</h2>

        <a href="<?php echo e(route('umkm.create')); ?>" class="btn btn-success">
            + Tambah UMKM
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
                <th width="120">Cover</th>
                <th>Nama UMKM</th>
                <th>Pemilik</th>
                <th>Kategori</th>
                <th>Kecamatan</th>
                <th>Harga Produk</th>
                <th>Jam Weekday</th>
                <th>Jam Weekend</th>
                <th width="250">Aksi</th>

            </tr>

        </thead>

        <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $umkm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>

                    <td><?php echo e($loop->iteration); ?></td>

                    <td>

                        <?php if($item->gambar_cover): ?>

                            <img src="<?php echo e(asset('storage/' . $item->gambar_cover)); ?>" width="110" class="img-thumbnail">

                        <?php else: ?>

                            <span class="text-danger">
                                Belum ada gambar
                            </span>

                        <?php endif; ?>

                    </td>

                    <td><?php echo e($item->nama_umkm); ?></td>

                    <td><?php echo e($item->pemilik); ?></td>

                    <td><?php echo e($item->kategori->nama_kategori ?? '-'); ?></td>

                    <td><?php echo e($item->kecamatan->nama_kecamatan ?? '-'); ?></td>

                    <td>

                        <?php if($item->harga_mulai): ?>

                            Rp <?php echo e(number_format($item->harga_mulai, 0, ',', '.')); ?>


                        <?php else: ?>

                            -

                        <?php endif; ?>

                    </td>

                    <td><?php echo e($item->jam_weekday ?? '-'); ?></td>

                    <td><?php echo e($item->jam_weekend ?? '-'); ?></td>

                    <td>

                        <a href="<?php echo e(route('umkm.edit', $item->id)); ?>" class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <a href="<?php echo e(route('galeri.umkm.index', $item->id)); ?>" class="btn btn-info btn-sm">

                            Galeri

                        </a>

                        <a href="<?php echo e(route('kontak.umkm.index', $item->id)); ?>" class="btn btn-primary btn-sm">

                            Kontak

                        </a>

                        <form action="<?php echo e(route('umkm.destroy', $item->id)); ?>" method="POST" class="d-inline">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus UMKM ini?')">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>

                    <td colspan="10" class="text-center">

                        Belum ada data UMKM.

                    </td>

                </tr>

            <?php endif; ?>

        </tbody>

    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp88\htdocs\siwak\resources\views/admin/umkm/index.blade.php ENDPATH**/ ?>
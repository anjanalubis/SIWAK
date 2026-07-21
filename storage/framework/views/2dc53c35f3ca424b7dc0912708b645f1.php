

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Data Kecamatan</h2>

    <a href="<?php echo e(route('kecamatan.create')); ?>" class="btn btn-success">
        + Tambah Kecamatan
    </a>

</div>

<?php if(session('success')): ?>

<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>

<?php endif; ?>

<table class="table table-bordered table-hover">

    <thead class="table-success">

        <tr>

            <th>No</th>
            <th>Nama Kecamatan</th>
            <th width="180">Aksi</th>

        </tr>

    </thead>

    <tbody>

    <?php $__empty_1 = true; $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <tr>

            <td><?php echo e($loop->iteration); ?></td>

            <td><?php echo e($item->nama_kecamatan); ?></td>

            <td>

                <a href="<?php echo e(route('kecamatan.edit',$item->id)); ?>"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="<?php echo e(route('kecamatan.destroy',$item->id)); ?>"
                    method="POST"
                    class="d-inline">

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus kecamatan ini?')">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <tr>

            <td colspan="3" class="text-center">
                Belum ada data kecamatan.
            </td>

        </tr>

    <?php endif; ?>

    </tbody>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp88\htdocs\siwak\resources\views/admin/kecamatan/index.blade.php ENDPATH**/ ?>
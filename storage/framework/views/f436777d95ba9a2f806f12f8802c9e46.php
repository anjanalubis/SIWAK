

<?php $__env->startSection('content'); ?>

<div class="container">

    <h3 class="mb-4">

        Tambah Kontak

        <?php if(isset($wisata)): ?>
            - <?php echo e($wisata->nama_wisata); ?>

        <?php elseif(isset($umkm)): ?>
            - <?php echo e($umkm->nama_umkm); ?>

        <?php endif; ?>

    </h3>

    <?php if($errors->any()): ?>

        <div class="alert alert-danger">

            <ul class="mb-0">

                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li><?php echo e($error); ?></li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>

    <?php endif; ?>


    <form action="<?php echo e(route('kontak.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>


        <?php if(isset($wisata)): ?>

            <input
                type="hidden"
                name="wisata_id"
                value="<?php echo e($wisata->id); ?>">

        <?php endif; ?>


        <?php if(isset($umkm)): ?>

            <input
                type="hidden"
                name="umkm_id"
                value="<?php echo e($umkm->id); ?>">

        <?php endif; ?>



        <div class="mb-3">

            <label class="form-label">

                Jenis Kontak

            </label>

            <select
                name="jenis_kontak"
                class="form-control"
                required>

                <option value="">-- Pilih Jenis Kontak --</option>

                <option value="WhatsApp">WhatsApp</option>

                <option value="Instagram">Instagram</option>

                <option value="Facebook">Facebook</option>

                <option value="TikTok">TikTok</option>

                <option value="Website">Website</option>

                <option value="Email">Email</option>

                <option value="YouTube">YouTube</option>

            </select>

        </div>



        <div class="mb-3">

            <label class="form-label">

                Link / Nomor Kontak

            </label>

            <input
                type="text"
                name="link_kontak"
                class="form-control"
                placeholder="Contoh: https://instagram.com/nama_umkm atau 628123456789"
                required>

        </div>



        <button
            type="submit"
            class="btn btn-success">

            Simpan

        </button>



        <?php if(isset($wisata)): ?>

            <a href="<?php echo e(route('kontak.index',$wisata->id)); ?>"
                class="btn btn-secondary">

                Kembali

            </a>

        <?php elseif(isset($umkm)): ?>

            <a href="<?php echo e(route('kontak.umkm.index',$umkm->id)); ?>"
                class="btn btn-secondary">

                Kembali

            </a>

        <?php endif; ?>

    </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp88\htdocs\siwak\resources\views/admin/kontak/create.blade.php ENDPATH**/ ?>
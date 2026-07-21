

<?php $__env->startSection('content'); ?>

    <div class="container">

        <h2 class="mb-4">Edit Data Wisata</h2>

        <form action="<?php echo e(route('wisata.update', $wisata->id)); ?>" method="POST" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            
            <div class="mb-3">
                <label class="form-label">Kategori</label>

                <select name="kategori_id" class="form-control">

                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($item->id); ?>" <?php echo e($wisata->kategori_id == $item->id ? 'selected' : ''); ?>>

                            <?php echo e($item->nama_kategori); ?>


                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
            </div>

            
            <div class="mb-3">
                <label class="form-label">Kecamatan</label>

                <select name="kecamatan_id" class="form-control">

                    <?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($item->id); ?>" <?php echo e($wisata->kecamatan_id == $item->id ? 'selected' : ''); ?>>

                            <?php echo e($item->nama_kecamatan); ?>


                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
            </div>

            
            <div class="mb-3">
                <label>Nama Wisata</label>

                <input type="text" name="nama_wisata" class="form-control" value="<?php echo e($wisata->nama_wisata); ?>">
            </div>

            
            <div class="mb-3">
                <label>Deskripsi</label>

                <textarea name="deskripsi" class="form-control" rows="5"><?php echo e($wisata->deskripsi); ?></textarea>
            </div>

            
            <div class="mb-3">
                <label>Alamat</label>

                <textarea name="alamat" class="form-control" rows="3"><?php echo e($wisata->alamat); ?></textarea>
            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Latitude</label>

                    <input type="text" name="latitude" class="form-control" value="<?php echo e($wisata->latitude); ?>">

                </div>

                <div class="col-md-6">

                    <label>Longitude</label>

                    <input type="text" name="longitude" class="form-control" value="<?php echo e($wisata->longitude); ?>">

                </div>

            </div>

            <div class="row mt-3">

                <div class="col-md-6">

                    <label>Harga Weekday</label>

                    <input type="number" name="harga_weekday" class="form-control" value="<?php echo e($wisata->harga_weekday); ?>">

                </div>

                <div class="col-md-6">

                    <label>Harga Weekend</label>

                    <input type="number" name="harga_weekend" class="form-control" value="<?php echo e($wisata->harga_weekend); ?>">

                </div>

            </div>

            <div class="row mt-3">

                <div class="col-md-6">

                    <label>Jam Operasional Weekday</label>

                    <input type="text" name="jam_weekday" class="form-control" value="<?php echo e($wisata->jam_weekday); ?>">

                </div>

                <div class="col-md-6">

                    <label>Jam Operasional Weekend</label>

                    <input type="text" name="jam_weekend" class="form-control" value="<?php echo e($wisata->jam_weekend); ?>">

                </div>

            </div>

            
            <div class="mt-3">

                <label>Cover Wisata</label>

                <?php if($wisata->gambar_cover): ?>

                    <div class="mb-2">

                        <img src="<?php echo e(asset('storage/' . $wisata->gambar_cover)); ?>" width="180" class="rounded border">

                    </div>

                <?php endif; ?>

                <input type="file" name="gambar_cover" class="form-control">

            </div>

            <div class="mt-4">

                <button class="btn btn-warning">
                    Update
                </button>

                <a href="<?php echo e(route('wisata.index')); ?>" class="btn btn-secondary">

                    Kembali

                </a>

            </div>

        </form>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp88\htdocs\siwak\resources\views/admin/wisata/edit.blade.php ENDPATH**/ ?>
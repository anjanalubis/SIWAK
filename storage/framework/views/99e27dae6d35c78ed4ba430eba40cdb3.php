

<?php $__env->startSection('content'); ?>
    <div class="card shadow-sm mb-4">

        <div class="card-header bg-success text-white">

            <h5 class="mb-0">
                🔍 Global Search
            </h5>

        </div>

        <div class="card-body">

            <form action="<?php echo e(route('admin.search')); ?>" method="GET">

                <div class="row">

                    <div class="col-md-6">

                        <input type="text" name="keyword" class="form-control" placeholder="Cari data..."
                            value="<?php echo e($keyword ?? ''); ?>" required>

                    </div>

                    <div class="col-md-3">

                        <select name="filter" class="form-select">

                            <option value="semua" <?php echo e(($filter ?? '') == 'semua' ? 'selected' : ''); ?>>
                                Semua
                            </option>

                            <option value="wisata" <?php echo e(($filter ?? '') == 'wisata' ? 'selected' : ''); ?>>
                                Wisata
                            </option>

                            <option value="umkm" <?php echo e(($filter ?? '') == 'umkm' ? 'selected' : ''); ?>>
                                UMKM
                            </option>

                            <option value="kategori" <?php echo e(($filter ?? '') == 'kategori' ? 'selected' : ''); ?>>
                                Kategori
                            </option>

                            <option value="kecamatan" <?php echo e(($filter ?? '') == 'kecamatan' ? 'selected' : ''); ?>>
                                Kecamatan
                            </option>
                            <option value="kontak" <?php echo e(($filter ?? '') == 'kontak' ? 'selected' : ''); ?>>
                                Kontak
                            </option>

                            <option value="galeri" <?php echo e(($filter ?? '') == 'galeri' ? 'selected' : ''); ?>>
                                Galeri
                            </option>

                        </select>

                    </div>

                    <div class="col-md-3">

                        <button class="btn btn-success w-100">

                            Cari

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>
    <?php if(isset($keyword)): ?>

        <div class="card shadow-sm mb-4">

            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    Hasil Pencarian :
                    <strong>"<?php echo e($keyword); ?>"</strong>
                </h5>
            </div>

            <div class="card-body">

                
                <?php if($wisata->count() > 0): ?>

                    <h5 class="text-success mb-3">
                        📍 Wisata (<?php echo e($wisata->count()); ?>)
                    </h5>

                    <?php $__currentLoopData = $wisata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">

                            <div>
                                <strong><?php echo e($item->nama_wisata); ?></strong>
                                <br>
                                <small class="text-muted"><?php echo e($item->alamat); ?></small>
                            </div>

                            <a href="<?php echo e(route('wisata.index')); ?>" class="btn btn-primary btn-sm">
                                Lihat
                            </a>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>


                
                <?php if($umkm->count() > 0): ?>

                    <hr>

                    <h5 class="text-primary mb-3">
                        🏪 UMKM (<?php echo e($umkm->count()); ?>)
                    </h5>

                    <?php $__currentLoopData = $umkm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">

                            <div>
                                <strong><?php echo e($item->nama_umkm); ?></strong>
                                <br>
                                <small class="text-muted"><?php echo e($item->alamat); ?></small>
                            </div>

                            <a href="<?php echo e(route('umkm.index')); ?>" class="btn btn-primary btn-sm">
                                Lihat
                            </a>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>


                
                <?php if($kategori->count() > 0): ?>

                    <hr>

                    <h5 class="text-danger mb-3">
                        🏷 Kategori (<?php echo e($kategori->count()); ?>)
                    </h5>

                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">

                            <div>

                                <?php echo e($item->nama_kategori); ?>


                            </div>

                            <a href="<?php echo e(route('kategori.index')); ?>" class="btn btn-primary btn-sm">
                                Lihat
                            </a>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>


                
                <?php if($kecamatan->count() > 0): ?>

                    <hr>

                    <h5 class="text-info mb-3">
                        🗺 Kecamatan (<?php echo e($kecamatan->count()); ?>)
                    </h5>

                    <?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">

                            <div>

                                <?php echo e($item->nama_kecamatan); ?>


                            </div>

                            <a href="<?php echo e(route('kecamatan.index')); ?>" class="btn btn-primary btn-sm">
                                Lihat
                            </a>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>
                
                <?php if($kontak->count() > 0): ?>

                    <hr>

                    <h5 class="text-secondary">
                        ☎ Kontak (<?php echo e($kontak->count()); ?>)
                    </h5>

                    <?php $__currentLoopData = $kontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">

                            <div>

                                <strong><?php echo e(ucfirst($item->jenis_kontak)); ?></strong>

                                <br>

                                <?php echo e($item->link_kontak); ?>


                            </div>

                            <?php if($item->wisata_id): ?>

                                <a href="<?php echo e(route('kontak.index', $item->wisata_id)); ?>" class="btn btn-primary btn-sm">

                                    Lihat

                                </a>

                            <?php elseif($item->umkm_id): ?>

                                <a href="<?php echo e(route('kontak.umkm.index', $item->umkm_id)); ?>" class="btn btn-primary btn-sm">

                                    Lihat

                                </a>

                            <?php endif; ?>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>

                
                <?php if($galeri->count() > 0): ?>

                    <hr>

                    <h5 class="text-dark">

                        🖼 Galeri (<?php echo e($galeri->count()); ?>)

                    </h5>

                    <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">

                            <div>

                                <?php echo e($item->judul); ?>


                            </div>

                            <?php if($item->wisata_id): ?>

                                <a href="<?php echo e(route('galeri.index', $item->wisata_id)); ?>" class="btn btn-primary btn-sm">

                                    Lihat

                                </a>

                            <?php elseif($item->umkm_id): ?>

                                <a href="<?php echo e(route('galeri.umkm.index', $item->umkm_id)); ?>" class="btn btn-primary btn-sm">

                                    Lihat

                                </a>

                            <?php endif; ?>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>

                <?php if(
                        $wisata->count() == 0 &&
                        $umkm->count() == 0 &&
                        $kategori->count() == 0 &&
                        $kecamatan->count() == 0
                    ): ?>

                    <div class="alert alert-warning text-center mb-0">

                        <strong>Tidak ada data yang ditemukan.</strong>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    <?php endif; ?>

    <div class="row justify-content-center">

        <div class="col-md-6 mb-3">
            <div class="card text-bg-success shadow h-100">
                <div class="card-body py-3">
                    <h5 class="card-title mb-2">Total Kategori</h5>
                    <h2 class="fw-bold"><?php echo e($totalKategori); ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card text-bg-primary shadow h-100">
                <div class="card-body py-3">
                    <h5 class="card-title mb-2">Total Kecamatan</h5>
                    <h2 class="fw-bold"><?php echo e($totalKecamatan); ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card text-bg-warning shadow h-100">
                <div class="card-body py-3">
                    <h5 class="card-title mb-2">Total Wisata</h5>
                    <h2 class="fw-bold"><?php echo e($totalWisata); ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card text-bg-info shadow h-100">
                <div class="card-body py-3">
                    <h5 class="card-title mb-2">Total UMKM</h5>
                    <h2 class="fw-bold"><?php echo e($totalUmkm); ?></h2>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp88\htdocs\siwak\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
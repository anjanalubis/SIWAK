<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SIWAK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="d-flex">

        <!-- Sidebar -->
        <div class="bg-success text-white p-3" style="width:250px; min-height:100vh;">

            <h3>SIWAK</h3>
            <hr>

            <a href="<?php echo e(route('admin.dashboard')); ?>" class="text-white d-block mb-3 text-decoration-none">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>

            <a href="<?php echo e(route('wisata.index')); ?>" class="text-white d-block mb-3 text-decoration-none">
                <i class="bi bi-geo-alt-fill"></i> Kelola Wisata
            </a>

            <a href="<?php echo e(route('umkm.index')); ?>" class="text-white d-block mb-3 text-decoration-none">
                <i class="bi bi-shop"></i> Kelola UMKM
            </a>

            <a href="<?php echo e(route('kategori.index')); ?>" class="text-white d-block mb-3 text-decoration-none">
                <i class="bi bi-tags"></i> Kategori
            </a>

            <a href="<?php echo e(route('kecamatan.index')); ?>" class="text-white d-block mb-3 text-decoration-none">
                <i class="bi bi-map"></i> Kecamatan
            </a>

            <hr>

            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger w-100">
                    Logout
                </button>
            </form>

        </div>

        <!-- Content -->
        <div class="flex-grow-1">

            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">

                <div>
                    <h4 class="fw-bold mb-0 text-success">
                        Dashboard SIWAK
                    </h4>

                    <small class="text-muted">
                        Sistem Informasi Wisata & UMKM Kabupaten Kebumen
                    </small>
                </div>

                <div class="ms-auto text-end">

                    <div class="fw-semibold">
                        👤 Administrator
                    </div>

                </div>

            </nav>
            <div class="p-4">

                <?php echo $__env->yieldContent('content'); ?>

            </div>

        </div>

    </div>

</body>

</html><?php /**PATH C:\xampp88\htdocs\siwak\resources\views/admin/layouts/admin.blade.php ENDPATH**/ ?>
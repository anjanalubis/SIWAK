<div class="sidebar">

    <div class="logo">
        <h3>SIWAK</h3>
        <small>Admin Panel</small>
    </div>

    <ul>

        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>
        </li>

        <li class="title">MASTER DATA</li>

        <li>
            <a href="#">
                <i class="bi bi-tags"></i>
                Kategori
            </a>
        </li>

        <li>
            <a href="#">
                <i class="bi bi-geo-alt"></i>
                Kecamatan
            </a>
        </li>

        <li class="title">DATA</li>

        <li>
            <a href="#">
                <i class="bi bi-tree"></i>
                Wisata
            </a>
        </li>

        <li>
            <a href="#">
                <i class="bi bi-shop"></i>
                UMKM
            </a>
        </li>

        <li>
            <a href="#">
                <i class="bi bi-images"></i>
                Galeri
            </a>
        </li>

        <li>
            <a href="#">
                <i class="bi bi-person-lines-fill"></i>
                Kontak
            </a>
        </li>

        <hr>

        <li>
            <a href="/">
                <i class="bi bi-globe"></i>
                Website
            </a>
        </li>

        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="btn btn-link text-start text-white text-decoration-none p-0">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </button>
            </form>
        </li>

    </ul>

</div>
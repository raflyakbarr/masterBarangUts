<nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <a href="<?php echo e(route('dashboard')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i>Master Barang</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('barang')); ?>" class="nav-link">Input Barang</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('kategori')); ?>" class="nav-link">Kategori Barang</a></li>
            </ul>
        </div>

        <!-- Nav Item - User Information -->
        <div class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-white small">
                    </span>
                <i class="bi bi-person-square fa-md"></i>
          </a>

        </div>
</nav>
<?php /**PATH C:\Users\arafl\masterBarangUts\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>
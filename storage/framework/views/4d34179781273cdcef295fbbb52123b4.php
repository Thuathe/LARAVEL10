<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<style>
  @import url("fontawesome-all.min.css");
  @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic");

  * {

    font-family: 'Source Sans Pro';

  }
</style>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <div>
      <aside class="bg-dark left-sidebar">
        <!-- Sidebar scroll-->
        <div class="mt-3 brand-logo d-flex align-items-center justify-content-between">
          <img src="assets/img/logo.png" width="70px" alt="">
          <h1>
            <a href="/blog" style="font-weight:bold;color:white;text-decoration:none;">Coding's</a>
          </h1>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">

          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="text-white hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/blog" aria-expanded="false">

                <span class="text-white hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" aria-expanded="false">

                <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex" role="search">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button class="btn btn-danger" type="submit">Logout</button>
                </form>
              </a>
            </li>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
           <p style="padding-left:850px;"><?php echo e(Auth::user()->name); ?> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
</svg></p>

        </nav>
      </header>

      <!--  Header End -->
      <div class=" container-fluid">

        <div class="container-fluid">

          <div class="card">

            <div class="bg-light card-body">

              <h5 class="card-title fw-semibold mb-4">Dashboard</h5>

              <form action="search" class="d-flex" role="search">
                <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-md btn-success mb-3">Tambah</a>
                <input name="search" style="margin-left:350px;width:50%;height:39px;" class=" form-control me-1" type="search" placeholder="Search" aria-label="Search">
                <button style="margin-left:10px;height:40px;" class="btn btn-outline-success" type="submit">Search</button>
              </form>
              <table style="border-color:aquamarine;" class=" table table-bordered">
                <thead class="text-black">
                  <tr>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">CONTENT</th>
                    <th scope="col">EXAMPLE</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                  <tr>
                    <td class="text-center">
                      <img src="<?php echo e(asset('/storage/blog/'.$blog1->image)); ?>" class="rounded" style="width:50px">
                    </td>
                    <td style="font-size:12px;"><?php echo e($blog1->title); ?></td>
                    <td style="font-size:12px;"><?php echo $blog1->content; ?></td>
                    <td class="text-center">
                      <img src="<?php echo e(asset('/storage/blog/'.$blog1->example)); ?>" class="rounded" style="width:50px">
                    </td>
                    <td class="col-3 text-center">

                      <form onsubmit="return 
confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('blog.destroy', $blog1->id)); ?>" method="POST">
                        <a style="font-size:10px;" href="<?php echo e(route('blog.show', $blog1->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                        <a style="font-size:10px;" href="<?php echo e(route('blog.edit', $blog1->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button style="font-size:10px;" type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                      </form>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  <div class="alert alert-danger">
                    Data blog belum Tersedia.
                  </div>
                  <?php endif; ?>
                </tbody>
              </table>
              <div class="pagination-status">
                <p>
                  <?php echo e($blog->links()); ?>

                </p>

              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\LARAVEL10\resources\views/blog/admin.blade.php ENDPATH**/ ?>
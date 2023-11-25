<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">HALAMAN ADMIN</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="text-center">
                                    <img src="<?php echo e(asset('/storage/post/'.$post1->image)); ?>" class="rounded" style="width:150px">
                                </td>
                                <td><?php echo e($post1->title); ?></td>
                                <td><?php echo $post1->content; ?></td>
                                <td class="text-center">
                                    <form onsubmit="return 
confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('posts.destroy', $post1->id)); ?>" method="POST">
                                        <a href="<?php echo e(route('posts.show', $post1->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="<?php echo e(route('posts.edit', $post1->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?> <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?php echo e($post->links()); ?>

                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html><?php /**PATH C:\xampp\htdocs\LARAVEL10\resources\views/posts/index.blade.php ENDPATH**/ ?>
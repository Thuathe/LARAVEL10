<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration - Register Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <!-- <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center">Register</h1>
                </div>
                <div class="card-body">
                    <?php if(Session::has('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('register')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                            <?php if($errors->has('name')): ?>
                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required autofocus>
                            <?php if($errors->has('email')): ?>
                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                            <?php if($errors->has('password')): ?>
                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <div class="checkbox">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

   
                    <form action="<?php echo e(route('register')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
    <div class="screen-1">
    
    <img  style=" margin:30px 0 50px 61px;"src="assets/img/logo.png" width="85px" alt="">

    <?php if(Session::has('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                    <?php endif; ?>
                <div class="email">
                    <label style="font-size:11px;"for="email">Name</label>
                    <div class="sec-2">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                            <?php if($errors->has('name')): ?>
                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                    </div>
                </div>
                <div class="email">
                    <label style="font-size:11px;"for="email">Email Address</label>
                    <div class="sec-2">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required autofocus>
                            <?php if($errors->has('email')): ?>
                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                    </div>
                </div>
                <div class="password">
                    <label style="font-size:11px;" for="password">Password</label>
                    <div class="sec-2">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                            <?php if($errors->has('password')): ?>
                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                            <?php endif; ?>
                        <ion-icon class="show-hide" name="eye-outline"></ion-icon>
                    </div>
                </div>
                <button style="background: #ea272d;"class="login">Sign-up </button>
                <a href="/login"style="margin:-15px 0 -70px 85px;"class="footer"><span>Sign-in</span></a>

            </div> </form>
</body>

</html><?php /**PATH C:\xampp\htdocs\LARAVEL10\resources\views/register.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <!-- Document Meta-->
    <meta charset="utf-8"/>
    
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

    <title>Medicare Management System</title>
  </head>
<body>
<?php  include 'header.php' ?>

    <!-- <h2>Login</h2>
    <form action="logi_system.php" method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form> -->
    <div class="hero min-h-screen bg-base-200">
  <div class="text-center">
      <h1 class="text-5xl font-bold pb-10">Sign Up Here</h1>
    <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
    <form class="card-body" action="signup_system.php" method="post">
    <div class="form-control">
        <label class="label">
            <span class="label-text">Full Name</span>
        </label>
        <input type="text" name="fullname" placeholder="Full Name" class="input input-bordered" required>
    </div>
    <div class="form-control">
        <label class="label">
            <span class="label-text">Username</span>
        </label>
        <input type="text" name="username" placeholder="Username" class="input input-bordered" required>
    </div>
    <div class="form-control">
        <label class="label">
            <span class="label-text">Password</span>
        </label>
        <input type="password" name="password" placeholder="Password" class="input input-bordered" required>
        <label class="label">
            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
        </label>
    </div>
    <div class="form-control">
        <label class="label">
            <span class="label-text">Confirm Password</span>
        </label>
        <input type="password" name="confirm_password" placeholder="Confirm Password" class="input input-bordered" required>
    </div>
    <div class="form-control mt-2">
        <button class="btn btn-primary" type="submit">Sign Up</button>
    </div>
    <div class="form-control mt-2">
        <label class="label">
            <a href="registration.php" class="label-text-alt link link-hover">Already Have an Account? Login</a>
        </label>
    </div>
</form>

    </div>
  </div>
</div>

<!-- <h2>Sign Up Here</h2>
  <form action="signup_system.php" method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Sign Up</button>
    </form> -->




<?php  include 'footer.php' ?>
</body>
</html>

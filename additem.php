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
      <h1 class="text-5xl font-bold pb-10">Add Medicine</h1>
    <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
      <form class="card-body" action="add_medicine.php" method="post" enctype="multipart/form-data">
        <div class="form-control">
          <label class="label">
            <span class="label-text">Medicine Name:</span>
          </label>
          <input type="text" id="medicine_name" name="medicine_name" class="input input-bordered" required>
          
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Medicine Power:</span>
          </label>
          <input type="text" id="medicine_power" name="medicine_power" class="input input-bordered" required>
          
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Quantity:</span>
          </label>
          <input type="number" id="quantity" name="quantity" class="input input-bordered" required>
          
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Image:</span>
          </label>
          <input type="file" id="image" name="image" accept="image/*" class="block w-full text-sm text-slate-500
      file:mr-4 file:py-2 file:px-4
      file:rounded-full file:border-0
      file:text-sm file:font-semibold
      file:bg-violet-50 file:text-violet-700
      hover:file:bg-violet-100" required>
          
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Price:</span>
          </label>
          <input type="number" id="price" name="price" step="0.1" class="input input-bordered" required> 
          
          
        </div>
        <div class="form-control mt-2">
          <button class="btn btn-primary" type="submit">Add Medicine</button>
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
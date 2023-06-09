<?php include 'header.php'; ?>

<div class="row">
  <div class="mx-auto col-10 col-md-8 col-lg-6">
    <!-- Form -->
    <form class="form-example" action="" method="post">
      <h1>Bootstrap 5: Align Center</h1>
      <p class="description">
        A tutorial on how to align a "form" in Bootstrap 4 and 5.
      </p>
      <!-- Input fields -->
      <div class="form-group">
        <label for="username">Username:</label>
        <input
          type="text"
          class="form-control username"
          id="username"
          placeholder="Username..."
          name="username"
        />
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input
          type="password"
          class="form-control password"
          id="password"
          placeholder="Password..."
          name="password"
        />
      </div>

      <button type="submit" class="btn btn-primary btn-customized mt-4">
        Login
      </button>
    </form>
    <!-- Form end -->
  </div>
</div>


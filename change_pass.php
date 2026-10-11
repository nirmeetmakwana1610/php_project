 <?php include('menu.php')?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Password</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Change Password</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard d-flex flex-column align-items-center ">
      <div class="col-lg-6 ">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Change Password</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="update_pass.php" method="POST">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Username</label>
                  <input type="text" class="form-control" name="txt_user" readonly value="<?php echo $data['S_username']; ?>" id="inputNanme4">
                </div>
                
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" name="txt_pass" id="inputPassword4">
                </div>
      
                <div class="text-center">
                  <input type="submit" class="btn btn-primary" name="sub">
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
    </section>

  </main><!-- End #main -->

<?php include('footer.php');?>
 <?php include('menu.php')?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add class</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"> Add a New class</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard d-flex flex-column align-items-center ">

      <?php
  include 'connection.php';
  $id=$_GET['i'];
  $s="select * from class where C_Id='$id'";
  $q=mysqli_query($con,$s);
  while ($r=mysqli_fetch_array($q))
  {
    ?>

      <div class="col-lg-6 ">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Class </h5>
              <form class="row g-3" action="class_edit_query.php" method="POST">
                <div class="col-12">
                  <input type="hidden" name="c_id" value="<?php echo $r[0]; ?>">
                  <label for="inputNanme4" class="form-label">Class Name</label>
                  <input type="text" class="form-control" autocomplete="off" name="txt_class" value="<?php echo $r[1]; ?>" id="inputNanme4">
                </div>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary" value="Update" name="e_add">
                </div>
              </form><!-- Vertical Form -->
          </div>
        </div>
    </section>

    <?php
        }
    ?>

  </main><!-- End #main -->

<?php include('footer.php');?>
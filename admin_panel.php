

  <?php include('menu.php')?>
 <main id="main" class="main">


<?php 
    include 'connection.php';
    $c="select count(*) as class from class where S_Id=$a";
    $q=mysqli_query($con,$c);
    $c=mysqli_fetch_assoc($q);

    $ss="select count(*) as subject from subject ";
    $sq=mysqli_query($con,$ss);
    $s_data=mysqli_fetch_assoc($sq);

    $s="select count(*) as student from student ";
    $sp=mysqli_query($con,$s);
    $sp_data=mysqli_fetch_assoc($sp);

?>

    <div class="pagetitle">
      <h1>Dashbord</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashbord</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="col-lg-12">
          <div class="row">

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Total Class </h5>
                      <h3><?php echo $c['class']; ?></h3>
                  </div>
              </div>
            </div>

            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Total Subject </h5>
                      <h3><?php echo $s_data['subject']; ?></h3>
                  </div>
              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Total Students </h5>
                      <h3><?php echo $sp_data['student']; ?></h3>
                  </div>
              </div>
            </div>


          </div>
    </div>

  </main><!-- End #main -->

  <?php include('footer.php');?>
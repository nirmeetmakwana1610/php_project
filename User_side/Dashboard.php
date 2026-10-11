 <?php include('menu.php')?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"> Dashboard </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<?php 
include 'connection.php';
 $s="select count(*) as test from marks where S_ID=$a";
    $st=mysqli_query($con,$s);
    $st_data=mysqli_fetch_assoc($st);
?>
    <div class="col-lg-12">
          <div class="row">

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Total Attend Test </h5>
                      <h3><?php echo $st_data['test'];?></h3>
                  </div>
              </div>
            </div>

          </div>
    </div>
  </main><!-- End #main -->

<?php include('footer.php');?>
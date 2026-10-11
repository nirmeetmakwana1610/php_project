 <?php include('menu.php')?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Test</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"> Attend a test </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
      
    <?php
          include 'connection.php';
          $a=$_SESSION['id'];

          $sel=mysqli_query($con,"select * from student where s_id=$a");
          $d=mysqli_fetch_array($sel);
          $uid=$d['C_Id']; 
          $class = $data[7];

          $t = "SELECT t.*,S.Subject_Name as s_name,C.C_name as C_Name FROM 
                                    test_info as t JOIN subject S ON t.sub_id = s.Sub_id 
                                    JOIN Class c ON t.C_Id = c.C_id
                                    WHERE c.C_Id = $class";
          $q=mysqli_query($con,$t);

          $t_date=date('d-m-Y');

          while ($rec=mysqli_fetch_array($q))
          {
            if(strtotime($rec['T_date']) == strtotime($t_date))
            {
              $tid=$rec[0];
              $tc=mysqli_query($con,"Select * from marks where T_id=$tid AND S_Id=$a");
              $da=mysqli_num_rows($tc);
              if($da == 0)
              {
              ?>
                <section class="section dashboard d-flex flex-column align-items-center ">
                  <div class="card col-12">
                    <div class="card-body">
                        <div class="row mt-4">  
                          <div class="col-lg-4 col-md-4 label "><b>Test Name : </b><?php echo $rec[1];?></div>
                          <div class="col-lg-4 col-md-4 label "><b>Total Question : </b><?php echo $rec[2];?></div>
                          <div class="col-lg-4 col-md-4 label "><b>Time Limit : </b><?php echo $rec[3];?> Min</div>
                        </div>

                        <div class="row mt-3 mb-4">
                          <div class="col-lg-4 col-md-3 label "><b>Total Marks : </b><?php echo $rec[4];?></div>
                          <div class="col-lg-4 col-md-3 label "><b>Subject : </b><?php echo $rec[9];?></div>
                          <div class="col-lg-4 col-md-3 label "><b>Class : </b><?php echo $rec[10];?></div>
                        </div>

                        <form action="fill_test.php" method="POST" class="row mb-3">
                          <input type="hidden" value="<?php echo $rec[0];?>" name="txt_id">
                          <input type="hidden" name="txt_time" value="<?php echo $rec[3];?>">
                          <input class="btn btn-primary w-100" type="submit" value="Attend" name="sub">
                        </form>
                    </div>
                  </div>
                </section>
              <?php
              }
            }
            else
            {
              ?>
              <section class="section dashboard d-flex flex-column align-items-center ">
                    <div class="card col-12">
                      <div class="card-body">
                        <h3 class="card-title d-flex flex-column align-items-center">Test Not Found</h3>
                      </div>
                    </div>
                </section> 
              <?php
            }
          }
          ?>

       
       
  </main><!-- End #main -->

<?php include('footer.php');?>
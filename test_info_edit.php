 <?php include('menu.php')?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Test</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"> Update Test Information</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard d-flex flex-column align-items-center ">

      <div class="col-lg-6 ">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Test</h5>
              <form class="row g-3" action="edit_test_info_query.php" method="POST">

                <?php
                        $id=$_SESSION['id'];
                        $id2 = $_GET['i'];

                            include 'connection.php';
                                $t="SELECT t.*,S.Subject_Name as s_name,C.C_name as C_Name FROM 
                                    test_info as t JOIN subject S ON t.sub_id = s.Sub_id 
                                    JOIN Class c ON t.C_Id = c.C_id
                                    WHERE t.T_Id =$id2";

                            $q=mysqli_query($con,$t);
                            while ($r=mysqli_fetch_row($q))
                              {
                
                                  ?>

                <div class="col-12">
                  <input type="hidden" name="t_id" value="<?php echo $r[0];?>">

                  <label for="inputNanme4" class="form-label">Test Name :</label>
                  <input type="text" class="form-control" name="test_name" value="<?php echo $r[1];?>" autocomplete="off" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Number of Question :</label>
                  <input type="number" class="form-control" name="no_que" value="<?php echo $r[2];?>"  id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Time Limit :</label>
                  <input type="number" placeholder="In Minutes" class="form-control" value="<?php echo $r[3];?>" name="time_limit"  id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Total Marks :</label>
                  <input type="number" onKeyPress="if(this.value.length==2) return false;" value="<?php echo $r[4];?>" class="form-control" name="test_mark"  id="inputNanme4">
                </div>

                <div class="col-12">
                  <label class="col-form-label">Select Subject :</label>
                  <div class="col-12">
                    <select name="sel_sub" class="form-select" aria-label="Default select example">
                      <?php
                        $id=$_SESSION['id'];
                            include 'connection.php';
                            $s="SELECT * FROM subject where S_Id=$id";
                            $q=mysqli_query($con,$s);
                            $a=1;
                            while ($h=mysqli_fetch_array($q))
                              {
                      ?>  

                                    <option value="<?php echo $h[0]?>" <?php if($r[6] == $h[0]){ echo 'selected'; } ?>><?php echo $h[1]?></option>
                                    <?php
                                        }
                                    ?>    
                    </select>
                  </div>
                </div>
                <div class="col-12">
                  <label class="col-form-label">Select Class :</label>
                  <div class="col-12">
                    <select name="sel_cal" class="form-select" aria-label="Default select example">
                      <?php
                        $id=$_SESSION['id'];
                            include 'connection.php';
                            $s="SELECT * FROM Class where S_Id=$id";
                            $q=mysqli_query($con,$s);
                            $a=1;
                            while ($h=mysqli_fetch_array($q))
                              {
                      ?>  

                                    <option value="<?php echo $h[0]?>" <?php if($r[7] == $h[0]){ echo 'selected'; } ?> ><?php echo $h[1]?></option>
                                    <?php
                                        }
                                    ?>    
                    </select>                
                  </div>
                </div>
                
                <div class="text-center">
                  <input type="submit" class="btn btn-primary" value="Update" name="edit_t_info">
                </div>
                <?php
                  }
                ?>
              </form><!-- Vertical Form -->
          </div>
        </div>
      </div>
    </section>
    

  </main><!-- End #main -->

<?php include('footer.php');?>
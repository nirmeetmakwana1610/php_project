 <?php include('menu.php')?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Test</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"> Add Test Information</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard d-flex flex-column align-items-center ">

      <div class="col-lg-6 ">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Test</h5>
              <form class="row g-3" action="add_test_info_query.php" method="POST">

                <div class="col-12">
                  <input type="hidden" name="s_id" value="<?php echo $_SESSION['id'];?>">

                  <label for="inputNanme4" class="form-label">Test Name :</label>
                  <input type="text" class="form-control" name="test_name" autocomplete="off" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Number of Question :</label>
                  <input type="number" class="form-control" name="no_que"  id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Time Limit :</label>
                  <input type="number" placeholder="In Minutes" class="form-control" name="time_limit"  id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Total Marks :</label>
                  <input type="number" onKeyPress="if(this.value.length==2) return false;" class="form-control" name="test_mark"  id="inputNanme4">
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
                            while ($r=mysqli_fetch_array($q))
                              {
                      ?>  

                                    <option value="<?php echo $r[0]?>"><?php echo $r[1]?></option>
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
                            while ($r=mysqli_fetch_array($q))
                              {
                      ?>  

                                    <option value="<?php echo $r[0]?>"><?php echo $r[1]?></option>
                                    <?php
                                        }
                                    ?>    
                    </select>                
                  </div>
                </div>
                
                <div class="text-center">
                  <input type="submit" class="btn btn-primary" value="ADD" name="add_t_info">
                </div>
              </form><!-- Vertical Form -->
          </div>
        </div>
      </div>
    </section>
      <div class="card-body col-lg-12">
              <h5 class="card-title">Test information</h5>
              <table class="table">
                  <tr>
                    <th>NO.</th>
                    <th>Test Name</th>   
                    <th>Questions </th>
                    <th>Time Limit </th>
                    <th>Marks</th>
                    <th>Date</th>
                    <th>Subject</th>
                    <th>Class</th>
                    <th colspan="2">Action</th>
                  </tr>
                      <?php
                        $id=$_SESSION['id'];
                            include 'connection.php';
                                $t="SELECT t.*,S.Subject_Name as s_name,C.C_name as C_Name FROM 
                                    test_info as t JOIN subject S ON t.sub_id = s.Sub_id 
                                    JOIN Class c ON t.C_Id = c.C_id
                                    WHERE t.s_Id =$id";

                            $q=mysqli_query($con,$t);
                            $a=1;
                            while ($r=mysqli_fetch_array($q))
                              {
                
                                  ?>

                                <tr>
                                  <td><?php echo $a; ?></td>
                                  <td><?php echo $r[1];?></td>
                                  <td><?php echo $r[2];?></td>
                                  <td><?php echo $r[3];?> Min</td>
                                  <td><?php echo $r[4];?></td>
                                  <td><?php echo $r[5];?></td>
                                  <td><?php echo $r['s_name'];?></td>
                                  <td><?php echo $r['C_Name'];?></td>
                                  <td><a href="test_info_edit.php?i=<?php echo $r[0];?>"><i class="bi bi-pencil-square"></i></a></td>
                                  <td><a href="test_info_delet.php?i=<?php echo $r[0];?>"><i class="bi bi-trash3-fill"></i></a></td> 
                                </tr>
                      <?php
                            $a++;
                              }
                      ?>         
                  
              </table>
              <!-- End Default Table Example -->
        </div>
    

  </main><!-- End #main -->

<?php include('footer.php');?>
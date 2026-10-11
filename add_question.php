 <?php include('menu.php');
 $id=$_SESSION['id'];
                            include 'connection.php';
                            $d=$_GET['i'];
 $c=mysqli_query($con,"SELECT count(T_Id) as Total FROM test_que_ans WHERE T_Id=$d");
                            $data=mysqli_fetch_assoc($c);



$t="SELECT t.*,S.Subject_Name as s_name,C.C_name as C_Name FROM 
                                    test_info as t JOIN subject S ON t.sub_id = s.Sub_id 
                                    JOIN Class c ON t.C_Id = c.C_id
                                    WHERE t.T_Id =$d";
                            $q=mysqli_query($con,$t);
                            $a=1;
                            $r=mysqli_fetch_row($q);
 ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Questions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"> Question  </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <div class="row">  
        <div class="col-lg-4 col-md-4 label "><b>Test Name : </b><?php echo $r[1];?></div>
        <div class="col-lg-4 col-md-4 label "><b>Total Question : </b><?php echo $r[2];?></div>
        <div class="col-lg-4 col-md-4 label "><b>Time Limit : </b><?php echo $r[3];?> Min</div>
    </div>

    <div class="row mt-3 mb-5">
      <div class="col-lg-4 col-md-4 label "><b>Total Marks : </b><?php echo $r[4];?></div>
      <div class="col-lg-4 col-md-4 label "><b>Subject : </b><?php echo $r[9];?></div>
      <div class="col-lg-4 col-md-4 label "><b>Class : </b><?php echo $r[10];?></div>
    </div>


<section class="section dashboard d-flex flex-column align-items-center ">

      <div class="col-lg-7 ">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Question <div class="ml-4"><?php echo $data['Total'];?> Of <?php echo $r[2];?></div></h5>
              <?php 
                if($r[2] ==  $data['Total'])
                  {
                    echo "You Have Enterd $r[2] Questions";
                  }
                else
                  {
            ?>
              <form class="row g-3" action="add_quetion_query.php" method="POST">
                  <div class="col-12">
                    <input type="hidden" name="t_id" value="<?php echo $r[0];?>">
                    <label for="inputNanme4" class="form-label">Question : </label>
                    <input type="text" class="form-control" name="txt_que" autocomplete="off" id="inputNanme4">
                  </div>
                  <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"> A </span>
                      <input type="text" class="form-control" autocomplete="off" name="txt_a"  aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"> B </span>
                      <input type="text" class="form-control" autocomplete="off" name="txt_b" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"> C </span>
                      <input type="text" class="form-control" autocomplete="off" name="txt_c" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"> D </span>
                      <input type="text" class="form-control" autocomplete="off" name="txt_d" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="col-12">
                    <label for="inputNanme4" class="form-label">Answer : </label>
                    <input type="text" class="form-control" name="txt_ans" name="txt_class" autocomplete="off" id="inputNanme4">
                  </div>
                  <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Save" name="add_que">
                  </div>
            </form><!-- Vertical Form -->
              <?php 
                }
              ?>
          </div>
        </div>
        <div class="card-body col-lg-12">
              <h5 class="card-title">Question List</h5>
              <table class="table">
                  <tr>
                    <th>NO.</th>
                    <th>Question</th>
                    <th> A </th>
                    <th> B </th>
                    <th> C </th>
                    <th> D </th>
                    <th> Answer </th>
                    <th colspan="2">Action</th>
                  </tr>
                 
                    <?php
                        $id=$_SESSION['id'];
                        $d=$_GET['i'];
                            include 'connection.php';
                            $a=1;
                            $s="SELECT * FROM test_que_ans WHERE T_Id=$d";
                            $q=mysqli_query($con,$s);
                            $a=1;
                            while ($row=mysqli_fetch_array($q))
                              {
                
                                  ?> 
                                  <tr>
                                    <td><?php echo $a; ?></td>
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $row[2]; ?></td>
                                    <td><?php echo $row[3]; ?></td>
                                    <td><?php echo $row[4]; ?></td>
                                    <td><?php echo $row[5]; ?></td>
                                    <td><?php echo $row[6]; ?></td>
                                    <td><a href="test_que_edit.php?i=<?php echo $row[0];?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="test_que_delet.php?i=<?php echo $row[0];?>"><i class="bi bi-trash3-fill"></i></a></td>
                                </tr>
                    <?php 
                    $a++ ;
                              }
                               
                    ?>
                  
              </table>
            </div>
              <div class="d-flex flex-column align-items-center">
                <button type="button" class="btn w-50 btn-square btn-primary"><a style="color:white;" href="admin_panel.php">Published</a></button></a>
              </div>
          </div>
    </section>

  </main><!-- End #main -->

<?php include('footer.php');?>
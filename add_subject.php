 <?php include('menu.php')?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Subject</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"> Add a New Subject</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard d-flex flex-column align-items-center ">

      <div class="col-lg-6 ">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Subject </h5>
              <form class="row g-3" action="add_subject_query.php" method="POST">
                <div class="col-12">
                  <input type="hidden" name="s_id" value="<?php echo $_SESSION['id'];?>">

                  <label for="inputNanme4" class="form-label">Subject Name</label>
                  <input type="text" class="form-control" autocomplete="off" name="txt_subject"  id="inputNanme4">
                </div>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary" value="ADD" name="add_sub">
                </div>
              </form><!-- Vertical Form -->
          </div>
        </div>

        <div class="card-body col-lg-12">
              <h5 class="card-title">Subject List</h5>
              <table class="table">
                  <tr>
                    <th>NO.</th>
                    <th>Subject</th>
                    <th colspan="2">Action</th>
                    </tr>
                      <?php
                        $id=$_SESSION['id'];
                            include 'connection.php';
                            $s="select * from subject where S_ID = $id";
                            $q=mysqli_query($con,$s);
                            $a=1;
                            while ($r=mysqli_fetch_array($q))
                              {
                
                                  ?>

                                <tr>
                                  <td><?php echo $a; ?></td>
                                  <td><?php echo $r[1];?></td>
                                  <td><a href="subject_edit.php?i=<?php echo $r[0];?>"><i class="bi bi-pencil-square"></i></a></td>
                                  <td><a href="subject_delet.php?i=<?php echo $r[0];?>"><i class="bi bi-trash3-fill"></i></a></td> 
                                </tr>
                      <?php
                            $a++;
                              }
                      ?>        
                  </tr>  
                  
              </table>
              <!-- End Default Table Example -->
        </div>
    </section>

  </main><!-- End #main -->

<?php include('footer.php');?>
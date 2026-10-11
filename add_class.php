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

      <div class="col-lg-6 ">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Class </h5>
              <form class="row g-3" action="add_class_query.php" method="POST">
                <div class="col-12">
                  <input type="hidden" name="a_id" value="<?php echo $_SESSION['id'];?>">
                  <label for="inputNanme4" class="form-label">Class Name</label>
                  <input type="text" class="form-control" name="txt_class" autocomplete="off" id="inputNanme4">
                </div>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary" value="ADD" name="add">
                </div>
              </form><!-- Vertical Form -->
          </div>
        </div>

        <div class="card-body col-lg-12">
              <h5 class="card-title">Class List</h5>
              <table class="table">
                  <tr>
                    <th>NO.</th>
                    <th>Class Name</th>
                    <th colspan="2">Action</th>
                    </tr>
                      <?php
                        $id=$_SESSION['id'];
                            include 'connection.php';
                            $s="SELECT * FROM class where S_Id=$id";
                            $q=mysqli_query($con,$s);
                            $a=1;
                            while ($r=mysqli_fetch_array($q))
                              {
                      ?>  
                                <tr>
                                  <td><?php echo $a; ?></td>
                                  <td><?php echo $r['1'];?></td>
                                  <td><a href="class_edit.php?i=<?php echo $r[0];?>"><i class="bi bi-pencil-square"></i></a></td>
                                  <td><a href="class_delet.php?i=<?php echo $r[0];?>"><i class="bi bi-trash3-fill"></i></a></td>
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
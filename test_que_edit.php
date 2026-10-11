 <?php include('menu.php');
        $id=$_SESSION['id'];
        include 'connection.php';
        $d=$_GET['i'];
        $t="SELECT * from test_que_ans where Q_Id =$d";
        $q=mysqli_query($con,$t);
        $a=1;
        $r=mysqli_fetch_row($q);
 ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Questions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"> Question  </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section dashboard d-flex flex-column align-items-center ">

      <div class="col-lg-7 ">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Question </h5>
              <form class="row g-3" action="edit_quetion_query.php" method="POST">
                  <div class="col-12">
                    <input type="hidden" name="q_id" value="<?php echo $r[0];?>">
                    <label for="inputNanme4" class="form-label">Question : </label>
                    <input type="text" class="form-control" name="txt_que" value="<?php echo $r[1];?>" autocomplete="off" id="inputNanme4">
                  </div>
                  <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"> A </span>
                      <input type="text" class="form-control" value="<?php echo $r[2];?>" autocomplete="off" name="txt_a"  aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"> B </span>
                      <input type="text" class="form-control" autocomplete="off" value="<?php echo $r[3];?>" name="txt_b" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"> C </span>
                      <input type="text" class="form-control" autocomplete="off" value="<?php echo $r[4];?>" name="txt_c" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"> D </span>
                      <input type="text" class="form-control" autocomplete="off" value="<?php echo $r[5];?>" name="txt_d" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="col-12">
                    <label for="inputNanme4" class="form-label">Answer : </label>
                    <input type="text" class="form-control" name="txt_ans" name="txt_class" value="<?php echo $r[6];?>" autocomplete="off" id="inputNanme4">
                  </div>
                  <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Update" name="edit_que">
                  </div>
            </form><!-- Vertical Form -->
             
          </div>
        </div>
    </section>

  </main><!-- End #main -->

<?php include('footer.php');?>
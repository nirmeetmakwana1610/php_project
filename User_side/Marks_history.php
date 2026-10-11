 <?php include('menu.php')?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Marks</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"> History </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

      <section class="section dashboard d-flex flex-column align-items-center ">
        <?php
          include 'connection.php';
          $in=1;
          $id=$_SESSION['id'];
          $s=mysqli_query($con,"SELECT test_info.T_Name,subject.Subject_Name,marks.M_Marks FROM marks  JOIN test_info  ON marks.T_Id = test_info.T_Id JOIN subject  ON marks.S_Id = subject.sub_id Where marks.S_ID=$id");
            while($rr=mysqli_fetch_array($s))
            {
        ?>
         <div class="card-body col-lg-12">
              <h5 class="card-title">Test Marks</h5>
              <table class="table">
                  <tr>
                    <th>NO.</th>
                    <th>Test Name</th>   
                    <th>Subject</th>
                    <th>Marks</th>
                  </tr>
                  <tr>
                    <td><?php echo $in; ?></td>
                    <td><?php echo $rr[0]; ?></td>
                    <td><?php echo $rr['1']; ?></td>
                    <td><?php echo $rr['2']; ?></td>
                  </tr>
              </table>
      </section>
<?php $in++;} ?>
  </main><!-- End #main -->

<?php include('footer.php');?>
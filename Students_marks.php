

  <?php include('menu.php')?>
 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Students</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Test Marks</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard d-flex flex-column align-items-center ">
        <div class="col-lg-6 ">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Select Class </h5>
                        <form class="row g-3" action="add_class_query.php" method="POST">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Class</label>

                                    <div class="col-12">
                                        <select name="sel_cal" id="sel_cal" class="form-select mb-3" aria-label="Default select example">
                                          <option>Select Class</option>
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
                        </form>
                </div>
            </div>
        </div>
      

          <div class="card-body col-lg-6">
              <h5 class="card-title">Students List</h5>
              <table class="table">
                  <tr>
                    <th>NO.</th>
                    <th>Student Name</th>   
                    <th>Marks</th>
                  </tr>
                  <div class="d" id="info"></div>
              </table>
              <!-- End Default Table Example -->
        </div>

</section>  
  </main><!-- End #main -->

<script>  

  $(document).ready(function(){

      $(document).on('change', '#sel_cal', function(){
      var query = $(this).val();
      if (query != '') {
        //alert(query);

        $.ajax({
          url:"s_query.php",
          method:"POST",
          data:{query:query},
          success:function(data)
          { 
            $('.table').append(data);
           // console.log(data);
           // $('#info').html(data);
          }
        });
      }
    });

  });
 
 </script>

  <?php include('footer.php');?>

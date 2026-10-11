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
       <section class="section dashboard d-flex flex-column align-items-center ">
        <p id="demo" style="font-size: 40px;"></p>
       </section>
       <hr>
    <?php
          include 'connection.php';
          $a=$_SESSION['id'];
          if(isset($_POST["sub"]))
          {
            $tid=$_POST['txt_id'];  
            $time=$_POST['txt_time'];?>
                  <form action="check_test.php" method="POST">
                    <input type="hidden" name="tid" value="<?php echo $tid;?>">
                     <?php $in=1;
                      $ft = "SELECT * from test_que_ans WHERE T_Id=$tid";
                      $x=mysqli_query($con,$ft);
                      while ($p=mysqli_fetch_array($x))
                      {
                
                      ?>
                        <div>
                          <h5 class="mt-5"><?php echo $in." . ".$p[1]; ?></h5>
                          <div class="row mt-2">
                            <div class="col-lg-6 col-md-6 label "><input type="radio" name="r<?php echo $p['0']; ?>"  value="<?php echo $p[2];?>"><b><?php echo $p[2];?></b></div>
                            <div class="col-lg-6 col-md-6 label "><input type="radio" name="r<?php echo $p['0']; ?>"  value="<?php echo $p[3];?>"><b><?php echo $p[3];?></b></div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-lg-6 col-md-6 label "><input type="radio" name="r<?php echo $p['0']; ?>"  value="<?php echo $p[5];?>"><b><?php echo $p[5];?></b></div>
                            <div class="col-lg-6 col-md-6 label "><input type="radio" name="r<?php echo $p['0']; ?>"  value="<?php echo $p[4];?>"><b><?php echo $p[4];?></b></div>
                            <div class="col-lg-6 col-md-6 label "><input type="radio" name="r<?php echo $p['0']; ?>" style="visibility: hidden;"  value="null" checked></div>
                          </div>
                        </div>        
                    <?php 
                        $in++; 
                      }
          }?>
                      <div class=" d-flex flex-column align-items-center "> 
                        <input class="btn btn-primary mt-5 col-6" type="submit" id="submit" name="sub">
                      </div>  
                  </form>
                 

       
       
  </main><!-- End #main -->
  
<script>
  $(document).ready(function(){
      var countDownDate = new Date().getTime();


var x = setInterval(function() {

  
  var now = new Date().getTime();

  var time = <?php echo $time; ?>;
  var get = (time*60)*1000;

  var fate = countDownDate+get;
    
  
  var distance = fate - now;
    
  
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  
  document.getElementById(" ").innerHTML =  minutes + "m " + seconds + "s ";
    
  
  console.log(distance);
  if (distance < 0) {
    $('#submit').trigger("click");
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
    alert('EXPIRED');

  }
}, 1000);
  });

</script>

<?php include('footer.php');?>
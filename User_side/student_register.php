<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Acadamic</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!--  -->
           <style>  
           ul{  
                background-color:#eee;  
                cursor:pointer;  
           }  
           li{  
                padding:12px;  
           }  
           </style> 



  <!-- Favicons -->
  <link href="assets/img/u_logo.png" rel="icon">
  <link href="assets/img/u_logo.png" rel="apple-touch-icon">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
          input::-webkit-outer-spin-button,
          input::-webkit-inner-spin-button {
              -webkit-appearance: none;
              margin: 0;
  </style>

</head>

<body style="background-color:skyblue;">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center ">
        <div class="container">
          <div class="row justify-content-center mt-4">
            <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center my-4">

              <div class="card mb-3">

                <div class="card-body">
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Student Registration</h5>
                    </div>
                    <form class="row g-3 needs-validation" enctype="multipart/form-data" novalidate action="school_register_insert.php" method="POST">
                      <div class="col-12">
                        <label for="yourUsername" class="form-label">Student Full Name </label>
                        <div class="input-group has-validation">
                          <input type="text" name="txt_s_name" placeholder="Enter Your Name " class="form-control" id="yourUsername" required autocomplete="off">
                          <div class="invalid-feedback">Please enter your Name.</div>
                        </div>
                      </div>

                    <div>
                      <div class="row">  
                        <div class="col-6">
                            <label class="form-label">Username </label>
                            <input type="text" placeholder="Enter your username" name="txt_user" class="form-control"  required autocomplete="off">
                            <div class="invalid-feedback">Please enter your Username</div>
                        </div>

                        <div class="col-6">
                            <label for="yourPassword" class="form-label">Password </label>
                            <input type="text" maxlength="12" minlength="8" placeholder="Enter your Password" name="txt_pass" class="form-control" id="yourPassword" required autocomplete="off">
                            <div class="invalid-feedback">Please enter your Password</div>
                        </div>
                      </div> 

                      <div class="row mt-3">  
                        <div class="col-6">
                          <label class="form-label">Number </label>
                          <input type="number" placeholder="Enter your Number" onKeyPress="if(this.value.length==12) return false;" name="txt_num" class="form-control"  required autocomplete="off">
                          <div class="invalid-feedback">Please enter your Contact Number</div>
                        </div>

                        <div class="col-6">
                          <label class="form-label">Email </label>
                          <input type="Email" placeholder="Enter your Email" name="txt_mail" class="form-control"  required autocomplete="off">
                          <div class="invalid-feedback">Please enter your Email Address</div>
                        </div>
                      </div>

                      <div class="row mt-3">  
                        <div class="col-6">
                          <label class="form-label">School </label>
                          <input type="text" name="txt_school" placeholder="Select School" style="position:relative;" id="txt_s" class="form-control"  required>
                          <input type="hidden" name="school_id" id="school_id">
                          <div id="r_list" style="position: absolute;"></div>
                          <div class="invalid-feedback">Please enter your Contact Number</div>
                        </div>

                        <div class="col-6"> <label class="form-label">Class </label> 
                          <select name="sel_cal" class="form-select" id="class_select" aria-label="Default select example" >
                           </select> 

                          <div class="invalid-feedback">Please enter your Class</div> 
                        </div>
                      </div>  

                      <div class="row mt-3">  
                        <div class="col-6">
                          <label class="form-label">Address </label>
                          <input type="text" placeholder="Enter your address" name="txt_add" class="form-control"  required autocomplete="off">
                          <div class="invalid-feedback">Please enter your address</div>
                        </div>

                        <div class="col-6">
                          <label class="form-label">Student Photo </label>
                          <input type="file" name="photo" class="form-control" required>
                          <div class="invalid-feedback">Please Select your Photo</div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-12 mt-4">
                      <input class="btn btn-primary w-100" type="submit" name="sub">
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"> have account? <a href="index.php">Login an account</a></p>
                    </div>
                  </form>
                </div>
              </div>

          
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<script>  
 $(document).ready(function(){  
      $('#txt_s').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"query.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#r_list').fadeIn();  
                          $('#r_list').html(data);  
                     }  
                });  
           }
           else
            {
              $('#r_list').fadeOut();  
              $('#r_list').html(null); 
            }
      }); 
       
      $(document).on('click', '.label', function(){  
        var id = $(this).attr("for");
        var s_id = $("#"+id).val();

          $('#school_id').val(s_id);

           $('#txt_s').val($(this).text()); 

           $('#r_list').fadeOut();  

           $.ajax({  
                     url:"query_class.php",  
                     method:"POST",  
                     data:{query:s_id},  
                     success:function(data)  
                     {  
                        $('#class_select').html(data);
                     }  
                });  

      });  

 });  
 </script>
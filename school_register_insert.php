<?php
        include 'connection.php';
if(isset($_POST["sub"]))
 {
  $s_name= $_POST['txt_s_name'];
  $s_user= $_POST['txt_user'];
  $s_pass=$_POST['txt_pass'];
  $s_num= $_POST['txt_num'];
  $s_email=$_POST['txt_mail'];
  $s_add=$_POST['txt_add'];
  $s_date=date('d/m/Y h:i:s', time());
  $target_dir="assets/img/";
  $target_file=$target_dir.basename($_FILES['logo'] ['name']);
  if (move_uploaded_file($_FILES['logo'] ['tmp_name'],$target_file))
    {

       //echo "File uplode";
       $h="insert into school values('','$s_name','$s_user','$s_pass','$s_num','$s_email','$s_date','$s_add','$target_file')";
       $j=mysqli_query($con,$h);
       if ($j)
        {
            header('location:index.php');
        } 
    }
    else 
        {
         echo "not done";
        } 
 }
?>
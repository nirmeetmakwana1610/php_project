<?php
        include 'connection.php';
if(isset($_POST["sub"]))
 {
  $u_name= $_POST['txt_s_name'];
  $u_user= $_POST['txt_user'];
  $u_pass=$_POST['txt_pass'];
  $u_num= $_POST['txt_num'];
  $u_email=$_POST['txt_mail'];
  $s_id=$_POST['school_id'];
  $c_id=$_POST['sel_cal'];
  $u_add=$_POST['txt_add'];
  $u_date=date('d/m/Y h:i:s', time());
  $target_dir="assets/img/";
  $target_file=$target_dir.basename($_FILES['photo'] ['name']);
  if (move_uploaded_file($_FILES['photo'] ['tmp_name'],$target_file))
    {

       $h="insert into student VALUES('?','$u_name','$u_user','$u_pass','$u_num','$u_email',$s_id,$c_id,'$u_add','$u_date','$target_file')";    
       $j=mysqli_query($con,$h);
       if($j)
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
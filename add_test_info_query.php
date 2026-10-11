<?php
        include 'connection.php';
if(isset($_POST["add_t_info"]))
 {
      $t_name= $_POST['test_name'];
      $n_que= $_POST['no_que'];
      $t_limit= $_POST['time_limit'];
      $t_mark= $_POST['test_mark'];
      $t_date=date('d-m-Y');
      $sub_id=$_POST['sel_sub'];
      $C_id= $_POST['sel_cal'];
      $S_id=$_POST['s_id'];

       $t="INSERT INTO test_info values('','$t_name',$n_que,$t_limit,$t_mark,'$t_date',$sub_id,$C_id,$S_id)";
       $j=mysqli_query($con,$t);
        if($j)
        {
            $last_id = mysqli_insert_id($con);
            echo "<script>
                  window.location.href='add_question.php?i=$last_id';
                 </script>";
            
        } 
    
        else 
        {
            echo "not done";
        } 
 }
?>
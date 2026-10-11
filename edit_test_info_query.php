<?php
        include 'connection.php';
if(isset($_POST["edit_t_info"]))
 {
      $t_id= $_POST['t_id'];
      $t_name= $_POST['test_name'];
      $n_que= $_POST['no_que'];
      $t_limit= $_POST['time_limit'];
      $t_mark= $_POST['test_mark'];

      // $t_date=date('d/m/Y h:i:s', time());

      $sub_id=$_POST['sel_sub'];
      $C_id= $_POST['sel_cal'];

      //$S_id=$_POST['s_id'];
      
       $a="UPDATE test_info SET T_Name='$t_name',No_question=$n_que,T_Limit=$t_limit,T_Marks=$t_mark,Sub_id=$sub_id,C_Id=$C_id
            WHERE T_Id ='$t_id'";
       $j=mysqli_query($con,$a);
        if($j)
        {
            $last_id = mysqli_insert_id($con);
            // echo "last id ".$last_id;
            // header('location:add_question.php')
            echo "<script>
                  window.location.href='add_test_info.php?i=$last_id';
                 </script>";
            
        } 
    
        else 
        {
            echo "not done";
        } 
 }
?>
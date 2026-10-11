<?php
        include 'connection.php';
        session_start();
if(isset($_POST["add_que"]))
 {
      $S_id=$_SESSION['id'];
      $t_id=$_POST['t_id'];
      $que= $_POST['txt_que'];
      $a= $_POST['txt_a'];
      $b= $_POST['txt_b'];
      $c= $_POST['txt_c'];
      $d= $_POST['txt_d'];
      $ans= $_POST['txt_ans'];

       $t="INSERT INTO test_que_ans values('','$que','$a','$b','$c','$d','$ans',$t_id,$S_id)";
       $j=mysqli_query($con,$t);
        if($j)
        {
            echo "<script>
                  window.location.href='add_question.php?i=$t_id';
                 </script>";
            
        } 
    
        else 
        {
            echo "not done";
        } 
 }
?>
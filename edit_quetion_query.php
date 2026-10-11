<?php
	include 'connection.php';
		if (isset($_POST['edit_que']))
			{
      $q_id=$_POST['q_id'];
      $que= $_POST['txt_que'];
      $a= $_POST['txt_a'];
      $b= $_POST['txt_b'];
      $c= $_POST['txt_c'];
      $d= $_POST['txt_d'];
      $ans= $_POST['txt_ans'];

			$sql ="UPDATE test_que_ans SET question='$que',A='$a',B='$b',C='$c',D=$d,Answer='$ans' WHERE Q_Id=$q_id";
		
			if (mysqli_query($con,$sql))
				{
					echo "<script>
                        window.location.href='add_question.php';
                      </script>";
				}
				else
				{
					echo "error";
				}
			}		

?>
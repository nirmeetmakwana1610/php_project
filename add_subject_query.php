<?php
	include 'connection.php';
		if (isset($_POST['add_sub']))
			{
				$s_id           = $_POST['s_id'];
				$s_subject      = $_POST['txt_subject'];

			$sql ="INSERT INTO subject VALUES('','$s_subject',$s_id)";
		
			if (mysqli_query($con,$sql))
				{
					echo "<script>
                        window.location.href='add_subject.php';
                      </script>";
				}
				else
				{
					echo "error";
				}
			}		

?>
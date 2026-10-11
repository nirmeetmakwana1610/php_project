<?php
	include 'connection.php';
		if (isset($_POST['e_add']))
			{

				$s_id      = $_POST['s_id'];
				$s_name    = $_POST['txt_subject'];

			$sql ="UPDATE subject SET Subject_Name='$s_name' where Sub_Id=$s_id";
		
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
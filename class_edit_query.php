<?php
	include 'connection.php';
		if (isset($_POST['e_add']))
			{

				$c_id      = $_POST['c_id'];
				$c_name    = $_POST['txt_class'];

			$sql ="UPDATE class SET C_Name='$c_name' where C_Id=$c_id";
		
			if (mysqli_query($con,$sql))
				{
					echo "<script>
                        window.location.href='add_class.php';
                      </script>";
				}
				else
				{
					echo "error";
				}
			}		

?>
<?php
	include 'connection.php';
		if (isset($_POST['add']))
			{

				$s_id      = $_POST['a_id'];
				$c_name    = $_POST['txt_class'];

			$sql ="INSERT INTO class VALUES('','$c_name',$s_id)";
		
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
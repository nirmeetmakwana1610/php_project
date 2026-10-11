<?php
include 'connection.php';
$id=$_GET['i'];

	$j="delete from test_info where T_Id=$id";

	if (mysqli_query($con,$j))
	{
		echo "<script>
                        alert('Remove Test...');
                        window.location.href='add_test_info.php';
                      </script>";
	}
?>

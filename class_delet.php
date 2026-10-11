<?php
include 'connection.php';
$id=$_GET['i'];

	$j="delete from class where C_Id=$id";

	if (mysqli_query($con,$j))
	{
		echo "<script>
                        alert('Remove class...');
                        window.location.href='add_class.php';
                      </script>";
	}
?>

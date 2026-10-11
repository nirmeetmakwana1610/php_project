<?php
include 'connection.php';
$id=$_GET['i'];

	$j="delete from subject where sub_Id=$id";

	if (mysqli_query($con,$j))
	{
		echo "<script>
                        alert('Remove Subject...');
                        window.location.href='add_subject.php';
                      </script>";
	}
?>

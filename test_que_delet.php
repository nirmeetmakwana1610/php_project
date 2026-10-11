<?php
include 'connection.php';
$id=$_GET['i'];

	$j="delete from test_que_ans where Q_Id=$id";

	if (mysqli_query($con,$j))
	{
		echo "<script>
                        alert('Remove questions...');
                        window.location.href='add_question.php';
                      </script>";
	}
?>

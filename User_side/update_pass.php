<?php
include 'connection.php';

    if (isset($_POST['sub']))
    {   
        $name=$_POST['txt_user'];
        $pass = $_POST['txt_pass'];
        $j="update student set u_pass='$pass' where u_name='$name'";

        if (mysqli_query($con,$j))
        {
             echo "<script>
                        alert('Your Password update'); 
                        window.location.href='Dashboard.php';
                      </script>";
        }
        else
        {
            echo "error";
        }    
    }
?>


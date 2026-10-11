<?php 
session_start();
    include 'connection.php';

        if(isset($_POST["sub"]))
        {
            $name=$_POST['txt_name'];
            $pass=$_POST['txt_pass'];
            $sel=mysqli_query($con,"Select * from school  where s_username='$name' AND s_pass='$pass'");
            $data=mysqli_fetch_array($sel);
            if($data)
            {
                $_SESSION['id']=$data['S_ID'];
                echo "<script>
                        window.location.href='admin_panel.php';
                      </script>";
            }
            else
            { 
                echo "<script>
                        alert('Enter valide data');
                        window.location.href='index.php';
                      </script>";
            }
            
        }
?>
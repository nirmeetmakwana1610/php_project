
<?php
    include 'connection.php';
    session_start();
    if(isset($_POST["sub"]))
    {
        $t_id=$_POST['tid']; 
        $uid=$_SESSION['id'];
        $sel=mysqli_query($con,"select * from test_que_ans  WHERE T_id = $t_id");
        $score = 0;
        while ($r=mysqli_fetch_array($sel))
        {
            $question_id = $r[0];
            $correct_answer = $r[6];
            $ans=$_POST['r'.$question_id];
            if($correct_answer == $ans)
            {
                $score ++;
            }
        }
        $in="INSERT INTO marks values('?',$score,$uid,$t_id)";
        $qy=mysqli_query($con,$in);
        if($qy)
        {
         echo "<script>
                        alert('Test Submited Your Marks : ". $score."')
                        window.location.href='Dashboard.php';
                      </script>";
        }
        else
        {
          echo "NO";
        }
    }
    ?>
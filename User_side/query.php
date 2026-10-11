<?php  
include 'connection.php';
 if(isset($_POST["query"]))  
 {  
     $a=$_POST["query"];
      $output = '';  
      $query = "SELECT * FROM school WHERE S_Name LIKE '".$_POST["query"]."%'";  
      $result = mysqli_query($con, $query);  
      $output = '<ul style="list-style:none;">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= "
                <label class='label' for='s_name".$row[0]."'><li>$row[1]</li></label> <input type='hidden' name='s_id' id='s_name".$row[0]."' class='s_id' value='$row[0]'> ";  
           }  
      }  
      else  
      {  
           $output .= '<li>School Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  
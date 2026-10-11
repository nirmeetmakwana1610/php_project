<?php  
include 'connection.php';
 if(isset($_POST["query"]))  
 {  
     $a=$_POST["query"];
      $output = '';  
      $query = "SELECT * FROM class WHERE S_id =  $a ";  
      $result = mysqli_query($con, $query);  
      
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= "<option value=".$row[0].">".$row[1]."</option>";  
           }  
      }  
      else  
      {  
           $output .= '<option>No Class Found</option>';  
      }  
        
      echo $output;  
 }  
 ?>  
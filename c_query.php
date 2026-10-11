<?php
session_start();
                        $id=$_SESSION['id'];
                            include 'connection.php';
                            $output= "";
                            if($_POST["query"])
                            {
                              $cid=$_POST["query"];
                              $a = 1;
                              $s="SELECT * FROM student where C_Id=$cid";
                              $q=mysqli_query($con,$s);
                              while($val = mysqli_fetch_array($q))
                              {
                                $output .= "
                                  <tr>
                                    <td>".$a."</td>
                                    <td>".$val[1]."</td>
                                    <td>".$val[4]."</td>
                                    <td>".$val[5]."</td>
                                    <td>".$val[8]."</td>
                                    <td><img src='User_side/".$val[10]."' width='150px' height='160px' ></td>
                                  </tr>

                                ";
                                $a++;
                              }

                              echo $output;
                              
                            }
                      ?>         
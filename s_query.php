<?php
session_start();
                        $id=$_SESSION['id'];
                            include 'connection.php';
                            $output= "";
                            if($_POST["query"])
                            {
                              $cid=$_POST["query"];
                              $a = 1;
                              $s="SELECT student.Full_Name ,marks.M_Marks FROM student JOIN marks ON student.S_ID = marks.S_ID JOIN test_info ON test_info.T_id = marks.T_id WHERE test_info.C_Id = $cid";
                              $q=mysqli_query($con,$s);
                              while($val = mysqli_fetch_array($q))
                              {
                                $output .= "
                                  <tr>
                                    <td>".$a."</td>
                                    <td>".$val['Full_Name']."</td>
                                    <td>".$val['M_Marks']."</td>
                                  </tr>

                                ";
                                $a++;
                              }

                              echo $output;
                              
                            }
                      ?>         
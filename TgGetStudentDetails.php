<?php session_start();
include('../config.php');

$studentid= $_POST['studentid'];


                      $sql="SELECT * FROM `admin` where `id`='$studentid' ";
                    
  
                      $result = mysqli_query($conn, $sql);  
                      
          
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) { 
				 $name=$row['name'];
				 $semester=$row['semester'];
				 $Enrollment=$row['Enrollment'];
				}  }


?>

											
											
												 <div class="col-sm-12 form-group">
                                                <label>Student Details</label>
												
                                                <table class="table">
												<tr>
												<th>Name </th>
												<th>Enrollment No. </th>
												<th>Attendance % </th>
												<th>Fees  </th>
												<th>Certificate  </th>
												<th>Remark  </th>
												</tr>
												
												<tr>
												<td> <?php echo $name;?><input type="hidden" name="studentname" value="<?php echo $name;?>"></td>
												
												<td> <?php echo $Enrollment;?>
												<input type="hidden" name="Enrollment" value="<?php echo $Enrollment;?>">
												</td>
												
												<td> <input type="text" name="Attendance" class="form-control" placeholder="Attendance"></td>
												
												<td> <input type="text" name="fees" placeholder="fees" class="form-control"> </td>
												
												<td> <input type="file" name="pro_more_img[]"  class="form-control"> 

                                               <input type="file" name="pro_more_img[]"  class="form-control">

                                               <input type="file" name="pro_more_img[]"  class="form-control">

												</td>
												
												<td> <input type="text" name="remark" placeholder="Enter Remark"  class="form-control"></td>
												
												</tr>
												
												<tr>
												
												</tr>
												</table>

                                            </div>							
											
											
											
											
											
											
											
											
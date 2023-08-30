<?php session_start();
include('../config.php');

$cource= $_POST['cource'];
?>

											 <div class="col-sm-6 form-group">
                                                <label>Select Subject</label>
                                                <select  name="Branch" class="form-control teacherArea" required="required">
                                                    
                                                  <option value=""> Select</option>
                                                    <?php 
                                                           $sql = "select * from `addsubject` where `cource`= '$cource'";  
                                                              $result = mysqli_query($conn, $sql);  
       
          

                                                          if($result){ 
      
                                                          while($row = mysqli_fetch_assoc($result)) {

                                                            echo "<option>".ucwords($row['subjectname'])."</option>";
                                                          }
                                                      } ?>
                                               </select>

                                            </div>
											
											
											
											
											
															 <div class="col-sm-6 form-group">
                                                <label>Select Semester</label>
                                                <select  name="Section" class="form-control teacherArea" required="required">
                                                    
                                                  <option value=""> Select</option>
                                                    <?php 
                                   $sql = "select * from `section` where `student`= '$cource'";  
                                      $result = mysqli_query($conn, $sql);  
       
          

                                        if($result){ 
      
                                 while($row = mysqli_fetch_assoc($result)) {

                         echo "<option>".ucwords($row['section'])."</option>";
                                                          }
                                                      } ?>
                                               </select>

                                            </div>							
											
											
											
											
											
											
											
											
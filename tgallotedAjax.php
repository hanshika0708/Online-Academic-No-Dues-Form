<?php session_start();
include('../config.php');

$teacherArea= $_POST['teacherArea'];
?>
   <div class="col-sm-6 form-group">
                       
                       
                                                <label>Choose Student</label>

<div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">  <label>Choose Student</label> <span class="caret"></span></button>
<ul class="dropdown-menu">
    
 <?php 
                                                           $sql = "select * from `admin` where `role`= 'Student'";  
                                                              $result = mysqli_query($conn, $sql);  
       
          

                                                          if($result){ 
      
                                                          while($row = mysqli_fetch_assoc($result)) {
                                         
                    echo ' <li>
                    <a href="#" class="small" data-value="option1" tabIndex="-1">
                    <input type="checkbox" name="student[]" value="'.ucwords($row['name']).'"/>
                    
                    &nbsp; '.ucwords($row['name']).'</a>
                    </li>';                      
                                          
                                          
                                                          }}?>   
    
    
    
   
</ul>
  </div>



                                              </div>

                    
                      
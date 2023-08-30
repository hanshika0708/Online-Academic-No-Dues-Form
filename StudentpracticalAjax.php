<?php session_start();
include('../config.php');
$Usernamename= $_SESSION['name'];
$assingment= $_POST['assingment'];  



     $sql="SELECT * FROM `tgalloted` where 	`teacher`= '$Usernamename' ";
	 
                    $result = mysqli_query($conn, $sql);  
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {
					
					$teacher=$row['teacher'];
					 $student=$row['student'];
					$Cource=$row['Cource'];
					
					$studentss=explode(',', $student);
					
					}}
?>
 <table class="table">
 <tr>
 <td>Name</td>
 <?php 
   $sql="SELECT * FROM `addsubject` where `cource`= '$Cource' ";
                    $result = mysqli_query($conn, $sql);  
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {
					
 ?>
  <th><?php echo $row['subjectname'];?> </th>
  <?php }} ?>
  
 </tr>
 
 
 <tr>
 
 <td><?php echo $student;?>  <input type="hidden" name="studentname" value="<?php echo $student;?>"></td>
 <?php 
   $sql="SELECT * FROM `addsubject` where `cource`= '$Cource' ";
                    $result = mysqli_query($conn, $sql);  
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {
					
 ?>
  <th><input type="checkbox" name="assingment[]" value="<?php echo $row['subjectname']; ?>"> </th>
  <?php }} ?>
 
 </tr>
 
 
 
 
 
 
 
 
 </table>
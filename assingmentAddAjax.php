<?php session_start();
include('../config.php');
$Usernamename= $_SESSION['name'];
$assingment= $_POST['assingment'];  
$PStudentName= $_POST['StudentName'];  

 $sql="SELECT * FROM `tgalloted` where  `teacher`= '$Usernamename' ";
   
                    $result = mysqli_query($conn, $sql);  
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {
          
          $teacher=$row['teacher'];
           $student=$row['student'];
          $Cource=$row['Cource'];
          
      
          }}


?>

<table class="table">
  <tr>
 <th>Name  </th>
 <th>1 </th>
 <th>2 </th>
 <th>3 </th>
 <th>4 </th>
 <th>5 </th>
 
 </tr>

  
    <?php 
  $sql="SELECT * FROM `tgalloted` where  `teacher`= '$Usernamename' AND `student`='$PStudentName' ";
   
                    $result = mysqli_query($conn, $sql);  
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {?>

<tr>
  <td><?php echo $row['student'];   ?>


  </td>
  <td><input type="checkbox" name="assingmentValueScore[]" value="01"> </td>
  <td><input type="checkbox" name="assingmentValueScore[]" value="02"> </td>
  <td><input type="checkbox" name="assingmentValueScore[]" value="03"> </td>
  <td><input type="checkbox" name="assingmentValueScore[]" value="04"> </td>
  <td><input type="checkbox" name="assingmentValueScore[]" value="05"> </td>
  



</tr>
<?php  }}  ?>



</table>

 
                              



<script>
    $(document).ready(function(){
    
$('.chooseSubject').on('change',function(){

  var assingment=$(this).val();
  
$.ajax({
method:"POST",
url:'ShowAssingmentAjax.php',
data:{assingment,assingment},
dataType:"html",
success:function(data)
{ 
 
    $(".AssingmentResultresponce").html(data);
}
});
});
});

        </script>

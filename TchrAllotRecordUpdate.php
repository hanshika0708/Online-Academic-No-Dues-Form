<?php session_start();
include('../config.php');
$MM_Username=$_SESSION['MM_Usernameadmin'];
$table=$_GET['table'];
$id=$_GET['id'];

$url=$_GET['url'];

 $sql="SELECT * FROM `teacherallotment` where `id`='$id'";
                    
 
                      $result = mysqli_query($conn, $sql);  
                      
          
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {


            
                              $teacher=   $row['teacher'];     
                              $cource=   $row['cource'];     
                            
                                 }}




if (isset($_POST['submit']))
{

    extract($_POST);

 

    $QuerygetData="UPDATE `teacherallotment` SET `teacher`='$TeacherName',`cource`='$CourceName',`branch`='$Branch',`section`='$Section' WHERE `id`= '$id'";




$GetDataResult=mysqli_query($conn,$QuerygetData);
if($GetDataResult)
{
    


echo "<script>alert('Teacher  Allotted Update Successfully')</script>";
    echo "<script>window.location.href='teacherAllotment.php'</script>";

     
 
}
else
{

echo "<script>alert('Server Down')</script>";

  

}


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/style.php';?>
    </head>
    <body class="hold-transition sidebar-mini">        
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php include 'inc/header.php';?>
                <!-- =============================================== -->
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <div class="header-title">
                           
                            <h1>Teacher  </h1>
                            <small>Teacher  Allotted</small>&nbsp;&nbsp; <b ></b>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- Form controls -->
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                    <?php echo @$msg;?> 
                                        <div class="btn-group"> 
                                          <h3>  Teacher  Allotted Details</h3>
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body">
                                         <form method="post"  enctype="multipart/form-data">
										   
                                           


											
											
											

										
										    <div class="col-sm-6 form-group">
                                                <label>Select Teacher</label>
                                                <select name="TeacherName"  class="form-control " required="required" >
                                                    
                                                    <option > <?php echo $teacher?></option>
                                                    <?php 
                                                           $sql = "select * from `admin` where `role` = 'Faculty'  ";  
                                                              $result = mysqli_query($conn, $sql);  
       
          

                                                          if($result){ 
      
                                                          while($row = mysqli_fetch_assoc($result)) {

                                                            echo "<option>".ucwords($row['name'])."</option>";
                                                          }
                                                      } ?>
                                                </select>

                                            </div>
											
											
											 <div class="col-sm-6 form-group">
                                                <label>Select Cource</label>
                                                <select  name="CourceName" class="form-control teacherArea" required="required">
                                                    
                                                   <option > <?php echo  $cource ?></option>
                                                    <?php 
                                                           $sql = "select * from `addsubject`";  
                                                              $result = mysqli_query($conn, $sql);  
       
          

                                                          if($result){ 
      
                                                          while($row = mysqli_fetch_assoc($result)) {

                                                            echo "<option>".ucwords($row['cource'])."</option>";
                                                          }
                                                      } ?>
                                                </select>

                                            </div>
											
											
											<div class="Resultresponce"></div>
											
											
											
											
											

                                              <div class="col-sm-12 reset-button">
                                                 
                                                 
												 <input type='submit' name="submit" value="Faculty Allotte" class="btn btn-success">
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>

                          
                             </div>
 




                             

                         </div>
                         <?php include 'inc/footer.php'?>
                         
                     </section> <!-- /.content -->
                 </div> <!-- /.content-wrapper -->
              
            </div> <!-- ./wrapper -->
           
      <?php include 'inc/script.php';?>
	  


<?php include('DataTablePagination.php');?>

<script>
    $(document).ready(function(){
    
$('.teacherArea').on('change',function(){

  var cource=$(this).val();
  
$.ajax({
method:"POST",
url:'courceChanger.php',
data:{cource,cource},
dataType:"html",
success:function(data)
{ 
 
    $(".Resultresponce").html(data);
}
});
});
});

        </script>


</body>
    
</html>

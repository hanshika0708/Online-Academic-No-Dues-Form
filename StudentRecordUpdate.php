<?php 
session_start();
include('../config.php');

$table=$_GET['table'];
$id=$_GET['id'];

$url=$_GET['url'];

       $sql="SELECT * FROM `admin` where `id`='$id'";
                    
 
                      $result = mysqli_query($conn, $sql);  
                      
          
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {


            
                              $name=   $row['name'];	 
                            
                              $semester= $row['semester'];         
                              $Enrollment=  $row['Enrollment'];      
                            

                        
                    }}
                    



if (isset($_POST['submit']))
{

    extract($_POST);


    $QuerygetData="UPDATE `admin` SET `name`='$name',`semester`='$semester',`Enrollment`='$clgid' WHERE `id`='$id'";
$GetDataResult=mysqli_query($conn,$QuerygetData);
if($GetDataResult)
{
   

echo "<script>alert('Faculty Details  Update Successfully')</script>";
    echo "<script>window.location.href='addStudent.php'</script>";




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
                             
                            <h1>Student</h1>
                            <small>Update Student</small>&nbsp;&nbsp; <b ></b>
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
                                          <h3>  Student Details</h3>
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body">
                                         <form method="post"  enctype="multipart/form-data">
										   
										 
											 <div class="col-sm-6 form-group">
                                                <label> Name</label>
                                                <input type="text" name="name" placeholder="Enter  Name" value="<?php echo $name;?>" class="form-control" required="required">
                                            </div>
											




											 <div class="col-sm-6 form-group">
                                                <label>Enrollment </label>
                                           <input type="text" name="clgid" value="<?php echo $Enrollment;?>" placeholder="Enter Collage id" class="form-control" required="required">
                                            </div>
											
                                         <div class="col-sm-6 form-group">
                                                <label> Semester </label>
                                                
												<select name="semester" class="form-control" required="required">
											<option><?php echo $semester;?></option>
											<option>Semester 1</option>
												<option>Semester 2</option>
												<option>Semester 3</option>
												<option>Semester 4</option>
												<option>Semester 5</option>
												<option>Semester 6</option>
												</select>
												
                                            </div>
											
											
										
                                            

										
											
											
										
										   
										   
                                            

                                              <div class="col-sm-6 reset-button">
                                                
                                                 
												 <input type='submit' name="submit" value="Update Student" class="btn btn-success">
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
</body>
    
</html>

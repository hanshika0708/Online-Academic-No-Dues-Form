<?php 
session_start();
include('../config.php');

$table=$_GET['table'];
$id=$_GET['id'];

$url=$_GET['url'];

       $sql="SELECT * FROM `section` where `id`='$id'";
                    
 
                      $result = mysqli_query($conn, $sql);  
                      
          
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {


            
                              $section=   $row['section'];	 
                            
                              $student= $row['student'];         
                             

                        
                    }}
                    
if (isset($_POST['submit']))
{


$Section=$_POST['Section'];

$Cource=$_POST['Cource'];

 

    $QuerygetData="UPDATE `section` SET `section`='$Section',`student`='$Cource' WHERE `id`='$id'";
$GetDataResult=mysqli_query($conn,$QuerygetData);
if($GetDataResult)
{
    

echo "<script>alert('Section   Update Successfully')</script>";
    echo "<script>window.location.href='addsection.php'</script>";
     
 
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
                           
                            <h1>Section  </h1>
                            <small>Update Section  </small>&nbsp;&nbsp; <b ></b>
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
                                          <h3>Fill  TG  Allotted Details</h3>
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body">
                                         <form method="post"  enctype="multipart/form-data">
										   
										   
											 <div class="col-sm-6 form-group">
											
 
											 
                                                <label>Choose Cource</label>
                                                <select  id="languages" name="Cource"  class="form-control " required="required">
                                                    
                                                  <option > <?php  echo $student?></option>
                                                    <?php 
                                                           $sql = "select * from `addsubject` ";  
                                                              $result = mysqli_query($conn, $sql);  
       
          

                                                          if($result){ 
      
                                                          while($row = mysqli_fetch_assoc($result)) {

                                                            echo "<option>".ucwords($row['cource'])."</option>";
                                                          }
                                                      } ?>
                                               </select>

                                            </div>
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
                                          
										    <div class="col-sm-6 form-group">
                                                <label>Enter Section </label>
                                                
												
												<select name="Section" class="form-control" required="required">
										<option><?php echo $section ;?></option>
										<option>Semester 1</option>
												<option>Semester 2</option>
												<option>Semester 3</option>
												<option>Semester 4</option>
												<option>Semester 5</option>
												<option>Semester 6</option>
												</select>
												
												
                                            </div>
											
											
											
											
											
											
											
											
											
											

                                              <div class="col-sm-12 reset-button">
                                                
                                                 
												 <input type='submit' name="submit" value="Update Section" class="btn btn-success">
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

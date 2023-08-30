<?php session_start();
include('../config.php');
$MM_Username=$_SESSION['MM_Usernameadmin'];

if (isset($_POST['submit']))
{

    extract($_POST);



    $QuerygetData="INSERT INTO `admin`( `name`, `clgid`, `semester`, `role`) VALUES
     ('$name', '$Enrollment', '$semester', 'Student')";
$GetDataResult=mysqli_query($conn,$QuerygetData);
if($GetDataResult)
{
    $msg='<div class="alert alert-success" role="alert">Student  Add Successfully</div>';
     
 
}
else
{
    $msg='<div class="alert alert-danger" role="alert">Server Down </div>';
     

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
                            <small>Add Student</small>&nbsp;&nbsp; <b ></b>
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
                                          <h3>Fill  Student Details</h3>
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body">
                                         <form method="post"  enctype="multipart/form-data">
										   
										   
										 
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										 
                                            
                                            
											 <div class="col-sm-6 form-group">
                                                <label> Name</label>
                                                <input type="text" name="name" placeholder="Enter  Name" class="form-control" required="required">
                                            </div>
											

											 <div class="col-sm-6 form-group">
                                                <label>Enrollment </label>
                                                <input type="text" name="Enrollment" placeholder="Enter Enrollment No." class="form-control" required="required">
                                            </div>
											
                                         <div class="col-sm-6 form-group">
                                                <label> Semester </label>
                                                
												<select name="semester" class="form-control" required="required">
												<option>Semester 1</option>
												<option>Semester 2</option>
												<option>Semester 3</option>
												<option>Semester 4</option>
												<option>Semester 5</option>
												<option>Semester 6</option>
												</select>
												
                                            </div>
											
											
										
                                            

										
											
											
										
										   
										   
                                            

                                              <div class="col-sm-6 reset-button">
                                                
                                                 
												 <input type='submit' name="submit" value="Add Student" class="btn btn-success">
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                   
                                        <div class="btn-group"> 
                                           
                                        <h3>Student List</h3> 
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body table-responsive">
                                         <form method="post"  enctype="multipart/form-data">
										   
                                         <table class="table table-bordered table-hover" id="example">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                                <th>Student Name</th>
                                                <th>Enrollment  Id</th>
                                                <th>Semester </th>
                                              
                                                <th>Action </th>
                                                
                                              
                                              
                                              
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                              <?php 


                                     $i=1;

                                     
                  //  $sql = "select * from `patiantupldreport` inner join  treatment on patiantupldreport.enrollid= treatment.patiantId";
                       $date=date('Y-m-d') ;

                                    

                      $sql="SELECT * FROM `admin` where `role` = 'Student' ";
                    
  
                      $result = mysqli_query($conn, $sql);  
                      
          
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {

                            
 
                       
                                        ?>
                                            
                                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $row['name'];?></td>      	 
                                <td><?php echo $row['Enrollment'];?></td>      	 
                                <td><?php echo $row['semester'];?></td>   
                                 
								
 <td><a href="Recorddelete.php?table=admin&id=<?php echo $row['id']?>&url=addStudent"> <span class="fa fa-trash fa-2x text-danger"> </span></a>| 
<a href="StudentRecordUpdate.php?table=admin&id=<?php echo $row['id']?>&url=addStudent"> <span class="fa fa-pencil fa-2x text-primary"> </span></a>
 </td> 								
                                           
                              
                              
                                
                               

                                             </tr>
                                   
                                       
                                     
									 
									 
									 <?php $i++; } } else {
									     echo " <tr>
                                        	 <td class='text-danger text-center' colspan='7'><h3>No Data Found</h3></td> </tr>";
									 }
									$number=$i-1;
								
									 
									 ?>
									 
							  <div class="col-sm-4 col-xs-12">
                                    
                                     <div class="dataTables_length">
                                                          
                                        	
                                                         
                                                         </div>
                                                     </div>
                                                     
                            </tbody>
                            
                           
                        </table>
                        
                   
                        
                                           
										   
										    
											
                                             <div class="col-sm-4 form-group">
                                              
                                            </div> <div class="col-md-2">  </div> 
							   
							   <div class="rapper"> </div> 
                               
                                           
										   
										   
										   
										   
                                            

                                              <div class="col-sm-12 reset-button">
                                                 </div>
                                         </form>
                                     </div>
                                    <div class="rapper"> </div> 
                               
                                           
										   
										   
										   
										   
                                            

                                              
                                        
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

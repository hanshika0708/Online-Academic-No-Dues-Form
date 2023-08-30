<?php session_start();
include('../config.php');
$MM_Username=$_SESSION['MM_Usernameadmin'];
 $Userid=$_SESSION['autoid'];
$Usernamename= $_SESSION['name'];
 
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
                             
                            <h1>Academic   </h1>
                            <small> Academic  Details</small>&nbsp;&nbsp; <b ></b>
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
                                   
                                        <div class="btn-group"> 
                                           
                                        <h3>Academic Details  </h3> 
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body table-responsive">
                                         <form method="post"  enctype="multipart/form-data">
										   
                                         <table class="table table-bordered table-hover" id="example">
                                        <thead>
                                            <tr>
                                             
                                             
                                                
                                                <th>Enrollment </th>
                                                <th>Attendance </th>
                                                <th>Fee </th>
                                                <th>Certificate </th>
                                                <th>Remark </th>
                                                <th>Date </th>
												
                                               
                                                 </tr>
                                                </thead>
                                                <tbody>
      
                                              <?php 

                      $sql="SELECT * FROM `studentacdmicdetails` where `name`='$Usernamename' ";
                     $result = mysqli_query($conn, $sql);  
                      if($result->num_rows > 0 )
                     { while ($row=mysqli_fetch_assoc($result)) {

  $certificate=explode(',',$row['certificate']);


                           ?><tr>
                                
                                <td><?php echo ucwords($row['enrollment']);?></td>      	 
                                   	 
                                <td><?php echo ucwords($row['Attendance']);?>%</td>         
                                <td><?php echo ucwords($row['fees']);?></td>         
                                <td>
                                    

<?php 
foreach($certificate as $value){?>

 <a href="imageUpload/<?php echo $value?>" target="_blank"> <span class="fa fa-eye"> </span></a>|
<?php 
}
?>



                                    </td>  
								
                                <td><?php echo ucwords($row['remark']);?></td>         
                                <td><?php echo ucwords($row['date']);?></td>         

								
                                </tr>
                                   
                                       
                                     
									 
									 
									 <?php  } } else {
									     echo " <tr>
                                        	 <td class='text-danger text-center' colspan='7'><h3>No Data Found</h3></td> </tr>";
									 }

								
									 
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

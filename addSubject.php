<?php session_start();
include('../config.php');
$MM_Username=$_SESSION['MM_Usernameadmin'];

if (isset($_POST['submit']))
{

    extract($_POST);



    $QuerygetData="INSERT INTO `addsubject`(`cource`, `branch`, `semister`, `subjectname`, `subjectcode`) VALUES ('$cource', '$branch', '$Semester', '$subname', '$subcode')";
$GetDataResult=mysqli_query($conn,$QuerygetData);
if($GetDataResult)
{
    $msg='<div class="alert alert-success" role="alert">Subject  Add Successfully</div>';
     
 
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
                             
                            <h1>Subject</h1>
                            <small>Add Subject</small>&nbsp;&nbsp; <b ></b>
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
                                          <h3>Fill  Subject Details</h3>
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body">
                                         <form method="post"  enctype="multipart/form-data">
										   
                                            <div class="col-sm-6 form-group">
                                                <label> Cource</label>
                                                <input type="text" name="cource" placeholder="Enter  Cource" class="form-control" required="required">
                                            </div>
											

											 <div class="col-sm-6 form-group">
                                                <label>Branch </label>
                                                <input type="text" name="branch" placeholder="Enter Branch " class="form-control" required="required">
                                            </div>
											
                                         <div class="col-sm-6 form-group">
                                                <label> Semester </label>
                                                <input type="text" name="Semester" placeholder="Enter Semester " class="form-control" required="required">
                                            </div>
                                      <div class="col-sm-12 form-group"></div>

                                         <div class="col-sm-6 form-group">
                                                <label> Subject Name </label>
                                                <input type="text" name="subname" placeholder="Enter Subject Name " class="form-control" required="required">
                                            </div>
                                            

                                             <div class="nameappend" ></div>



											 <div class="col-sm-6 form-group">
                                                <label> Subject Code</label>
                                                <input type="text" name="subcode" placeholder="Enter Subject Code " class="form-control" required="required">
                                            </div>
											


                                 <!--<div class="col-md-2 ">-->
                                 <!-- <div class="form-group smalls">-->
                                     
                                 <!--      <input type="button" style="margin-top: 25px;"  value="+" class="btn btn-info add_more">-->
                                 <!--   </div>-->

                                 <!--   </div>-->

	
										
										   <div class="col-md-12"></div>

										   
                                            

                                              <div class="col-sm-6 reset-button">
                                                 
                                                 
												 <input type='submit' name="submit" value="Add Subject" class="btn btn-success">
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                   
                                        <div class="btn-group"> 
                                           
                                        <h3>Subject List</h3> 
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body table-responsive">
                                         <form method="post"  enctype="multipart/form-data">
										   
                                         <table class="table table-bordered table-hover" id="example">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                                <th>Cource Name</th>
                                                <th>Branch  </th>
                                                <th>Semester </th>
                                                <th>Subject Name </th>
                                                <th>Subject Name </th>
                                                <th>Action</th>
                                     
                                              
                                              
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                              <?php 


                                     $i=1;

                                     
                  //  $sql = "select * from `patiantupldreport` inner join  treatment on patiantupldreport.enrollid= treatment.patiantId";
                       $date=date('Y-m-d') ;

                                    

                      $sql="SELECT * FROM `addsubject`";
                    
 
                      $result = mysqli_query($conn, $sql);  
                      
          
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {

                            
 
                       
                                        ?>
                                            
                                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $row['cource'];?></td>      	 
                                <td><?php echo $row['branch'];?></td>      	 
                                <td><?php echo $row['semister'];?></td>         
                                <td><?php echo $row['subjectname'];?></td>         
                                <td><?php echo $row['subjectcode'];?></td>         
                                           
										   
										   
                               <td><a href="Recorddelete.php?table=addsubject&id=<?php echo $row['id']?>&url=addSubject"> <span class="fa fa-trash fa-2x text-danger"> </span></a>| 
                               
                               <a href="RecordUpdate.php?table=addsubject&id=<?php echo $row['id']?>&url=addSubject"> <span class="fa fa-pencil  fa-2x text-primary"> </span></a>
                               
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
           
     
<script type="text/javascript">
$(document).ready(function(){
     var maxField=20;
         var fielhtml='<div class="row"><p class="col-md-2"> <input type="text" placeholder=" Author Name" name="authername[]" class="form-control "></p><p class="col-md-2"><input type="text" placeholder=" Designation" name="cdesignation[]" class="form-control"></p><p class="col-md-2"><input type="text" placeholder="Enter Institute/Organization" name="cinstitute[]" class="form-control"></p><p class="col-md-3"> <input type="email" placeholder=" Email Id" name="cemailid[]" class="form-control "></p> <p class="col-md-2"><input type="number" placeholder=" Mobile No." name="cmobile[]" class="form-control"></p>  <a href="javascript:void(0);" class="remove_size " title="Remove field"><input type="button"  class="btn btn-danger " style="size:40px;" value="-" /></a></div>';

         var y=1;
         $('.add_more').click(function(){ 
            
            alert("d");
         if(y<maxField)
         {

         y++;
         $('.nameappend').append(fielhtml);
         } 
          $('.nameappend').on('click','.remove_size', function(e){
           e.preventDefault();
           $(this).parent('div').remove();
         
         
          });
         
         });
</script>
 <?php include 'inc/script.php';?>
      
<?php include('DataTablePagination.php');?>
</body>
    
</html>

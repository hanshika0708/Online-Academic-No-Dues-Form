<?php session_start();
include('../config.php');
$MM_Username=$_SESSION['MM_Usernameadmin'];
$Usernamename= $_SESSION['name'];
if (isset($_POST['submit']))
{
											
						

    extract($_POST);

 

$imgs = array();
foreach ($_FILES['pro_more_img']['tmp_name'] as $key => $img_name) {


$file=$_FILES['pro_more_img']['name'][$key];

$tmpfile =$_FILES['pro_more_img']['tmp_name'][$key];


$more_img="imageUpload/".$file;
//$output=implode(" , ",'$more_img');
if(move_uploaded_file($tmpfile, $more_img)){

$imgs[]=$file;
}
}
$more_imgs = implode(',',$imgs);

$date=date('Y-m-d');

    $QuerygetData="INSERT INTO `studentacdmicdetails`(`name`, `enrollment`, `Attendance`, `fees`, `certificate`, `remark`, `date`) VALUES ('$studentname', '$Enrollment', '$Attendance', '$fees', '$more_imgs' , 'remark', 'date')";
$GetDataResult=mysqli_query($conn,$QuerygetData);
if($GetDataResult)
{
    $msg='<div class="alert alert-success" role="alert">Student  Details Add Successfully</div>';
     
 
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
                           
                            <h1>Student  </h1>
                            <small>Student Academic  Details</small>&nbsp;&nbsp; <b ></b>
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
                                          <h3>Student Academic  Details</h3>
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body">
                                         <form method="post"  enctype="multipart/form-data">
										   
                                           


											
											
											
											 <div class="col-sm-6 form-group">
                                                <label>Select Student</label>
                                                <select  name="CourceName" class="form-control teacherArea" required="required">
                                                    
                                                   <option value=""> Select</option>
                                                    <?php 
                                                           $sql = "select * from `admin` where `role`='Student' ";  
                                                              $result = mysqli_query($conn, $sql);  
       
          

                                                          if($result){ 
      
                                                          while($row = mysqli_fetch_assoc($result)) {

                                                            echo "<option value=".$row['id'].">".ucwords($row['name'])."</option>";
                                                          }
                                                      } ?>
                                                </select>

                                            </div>
											
											
											<div class="Resultresponce"></div>
											
											
											
											
											

                                              <div class="col-sm-12 reset-button">
                                                 
                                                 
												 <input type='submit' name="submit" value="Submit" class="btn btn-success">
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                   
                                        <div class="btn-group"> 
                                           
                                        <h3> Student Academic  Details</h3> 
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body table-responsive">
                                         <form method="post"  enctype="multipart/form-data">
										   
                                         <table class="table table-bordered table-hover" id="example">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                                <th>Name</th>
                                                <th>Enrollment  </th>
                                                <th>Attendance </th>
                                                <th>Fees </th>
                                                <th>Remark </th>
                                                <th>Action </th>
                                                 </tr>
                                                </thead>
												
											
                                                <tbody>
      
                                              <?php 


                                     $i=1;

                                     
                  //  $sql = "select * from `patiantupldreport` inner join  treatment on patiantupldreport.enrollid= treatment.patiantId";
                       $date=date('Y-m-d') ;

                                    

                      $sql="SELECT * FROM `studentacdmicdetails` ";
                     $result = mysqli_query($conn, $sql);  
                     
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {
                           ?>
						    
                                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $row['name'];?></td>      	 
                                <td><?php echo $row['enrollment'];?></td>      	 
                                <td><?php echo $row['Attendance'];?></td>         
                                <td><?php echo $row['fees'];?></td>         
                                <td><?php echo $row['remark'];?></td>  
								
                               <td><a href="Recorddelete.php?table=studentacdmicdetails&id=<?php echo $row['id']?>&url=TG"> <span class="fa fa-trash fa-2x text-danger"> </span></a></td>       
                              
                              
                                
                               

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

<script>
    $(document).ready(function(){
    
$('.teacherArea').on('change',function(){

  var studentid=$(this).val();
  
$.ajax({
method:"POST",
url:'TgGetStudentDetails.php',
data:{studentid,studentid},
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

<?php session_start();
include('../config.php');
$MM_Username=$_SESSION['MM_Usernameadmin'];

if (isset($_POST['submit']))
{

 

 
 for($i=0; $i< COUNT($_POST['student']); $i++)
 {
	 $TeacherName=$_POST['TeacherName'];
     $Cource=$_POST['Cource'];
	 $student=$_POST['student'][$i];

    $QuerygetData="INSERT INTO `tgalloted`(`teacher`, `student` , `Cource`) VALUES ('$TeacherName', '$student', '$Cource')";
$GetDataResult=mysqli_query($conn,$QuerygetData);
if($GetDataResult)
{
    $msg='<div class="alert alert-success" role="alert">TG  Allotted Successfully</div>';
     
 
}
else
{
    $msg='<div class="alert alert-danger" role="alert">Server Down </div>';
     

}
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
                                          <h3>Fill  TG  Allotted Details</h3>
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body">
                                         <form method="post"  enctype="multipart/form-data">
										   
                                          
										    <div class="col-sm-6 form-group">
                                                <label>Select TG</label>
                                                <select name="TeacherName"  class="form-control teacherArea" required="required" >
                                                    
                                                    <option value=""> Select</option>
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
											
											
											
											
											<div class="Resultresponce"></div>
											
											
										    <div class="col-sm-6 form-group">
                                                <label>Select Cource</label>
                                                <select name="Cource"  class="form-control " required="required" >
                                                    
                                                    <option value=""> Select</option>
                                                    <?php 
                                                           $sql = "select * from `addsubject`   ";  
                                                              $result = mysqli_query($conn, $sql);  
       
          

                                                          if($result){ 
      
                                                          while($row = mysqli_fetch_assoc($result)) {

                                                            echo "<option>".ucwords($row['cource'])."</option>";
                                                          }
                                                      } ?>
                                                </select>

                                            </div>
											
											
											
											

                                              <div class="col-sm-12 reset-button">
                                                
                                                 
												 <input type='submit' name="submit" value="TG Allotte" class="btn btn-success">
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                   
                                        <div class="btn-group"> 
                                           
                                        <h3> TG  Allotted List</h3> 
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body table-responsive">
                                         <form method="post"  enctype="multipart/form-data">
										   
                                         <table class="table table-bordered table-hover" id="example">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                                <th>Teacher </th>
                                                <th>Student  </th>
                                                <th>Cource  </th>
                                                <th>Action  </th>
                                              
                                                 </tr>
                                                </thead>
                                                <tbody>
      
                                              <?php 


                                     $i=1;

                


                      $sql="SELECT * FROM `tgalloted` ";
                    
  
                      $result = mysqli_query($conn, $sql);  
                      
          
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {
                           ?>
						                                                
                                            
                                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $row['teacher'];?></td>      	 
                                <td><?php echo $row['student'];?></td>  
                                <td><?php echo $row['Cource'];?></td>  

                             <td><a href="Recorddelete.php?table=tgalloted&id=<?php echo $row['id']?>&url=Tgalloted"> <span class="fa fa-trash fa-2x text-danger"> </span></a>|

 <a href="TgallotedRecorUpdate.php?table=tgalloted&id=<?php echo $row['id']?>&url=Tgalloted"> <span class="fa fa-pencil fa-2x text-primary"> </span></a>



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

<script>
    $(document).ready(function(){
 
$('.teacherArea').on('change',function(){

  var teacherArea=$(this).val();
  
$.ajax({
method:"POST",
url:'tgallotedAjax.php',
data:{teacherArea,teacherArea},
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

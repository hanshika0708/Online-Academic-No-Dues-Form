<?php 
session_start();
include('../config.php');

$table=$_GET['table'];
$id=$_GET['id'];

$url=$_GET['url'];

       $sql="SELECT * FROM `addsubject` where `id`='$id'";
                    
 
                      $result = mysqli_query($conn, $sql);  
                      
          
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {


            
                              $cource=   $row['cource'];	 
                              $branch=  $row['branch'];   	 
                              $semister= $row['semister'];         
                              $subjectname=  $row['subjectname'];      
                              $subjectcode=  $row['subjectcode'];


                        
                    }}
                    
                    
    
if (isset($_POST['submit']))
{

    extract($_POST);



    $QuerygetData=" UPDATE `addsubject` SET `cource`='$cource',`branch`='$branch',`semister`='$Semester',`subjectname`='$subname',`subjectcode`='$subcode' WHERE `id`='$id'";
    
    
   
    
    
$GetDataResult=mysqli_query($conn,$QuerygetData);
if($GetDataResult)
{
  
    echo "<script><script> alert('Subject  Update Successfully')</script>";
    echo "<script>window.location.href='addSubject.php'</script>";
     
 
}
else
{
 
 echo "<script><script> alert('Server Dowm')</script>"
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
                            <small>Update Subject</small>&nbsp;&nbsp; <b ></b>
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
                                                <input type="text" name="cource" placeholder="Enter  Cource" value="<?php echo $cource?>" class="form-control" required="required">
                                            </div>
										 
                                      
                            	

											 <div class="col-sm-6 form-group">
                                                <label>Branch </label>
                                                <input type="text" name="branch" placeholder="Enter Branch" value="<?php echo $branch ;?>" class="form-control" required="required">
                                            </div>
											
                                         <div class="col-sm-6 form-group">
                                                <label> Semester </label>
                                                <input type="text" name="Semester" placeholder="Enter Semester " class="form-control" value="<?php echo $semister?>" required="required">
                                            </div>
                                      <div class="col-sm-12 form-group"></div>

                                         <div class="col-sm-6 form-group">
                                                <label> Subject Name </label>
                                                <input type="text" name="subname" placeholder="Enter Subject Name " class="form-control" value="<?php echo $subjectname;?>" required="required">
                                            </div>
                                            

                                             <div class="nameappend" ></div>



											 <div class="col-sm-6 form-group">
                                                <label> Subject Code</label>
                                                <input type="text" name="subcode" value="<?php echo $subjectcode;?>" placeholder="Enter Subject Code " class="form-control" required="required">
                                            </div>
											


	
										
										   <div class="col-md-12"></div>

										   
                                            

                                              <div class="col-sm-6 reset-button">
                                                
                                                 
												 <input type='submit' name="submit" value="Update Subject" class="btn btn-success">
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


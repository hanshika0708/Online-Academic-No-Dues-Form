<?php session_start();
include('../config.php');
$MM_Username=$_SESSION['MM_Usernameadmin'];


$table=$_GET['table'];
$id=$_GET['id'];

$url=$_GET['url'];

       $sql="SELECT * FROM `admin` where `id`='$id'";
                    
 
                      $result = mysqli_query($conn, $sql);  
                      
          
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {


            
                              $name=   $row['name'];	 
                              $clgid=  $row['clgid'];   	 
                              $username= $row['username'];         
                              $pass=  $row['pass'];      
                            


                        
                    }}
                    








if (isset($_POST['submit']))
{

    extract($_POST);



     $QuerygetData=" UPDATE `admin` SET `name`='$name',`clgid`='$clgid',`username`='$username',`pass`='$pass' WHERE `id`='$id'";
$GetDataResult=mysqli_query($conn,$QuerygetData);
if($GetDataResult)
{
      echo "<script>alert('Faculty Details  Update Successfully')</script>";
    echo "<script>window.location.href='AddFaculty.php'</script>";
     
 
}
else
{
 
   echo "<script>alert('Server Dowm')</script>";
     


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
                           
                            <h1>Faculty</h1>
                            <small>Update Faculty</small>&nbsp;&nbsp; <b ></b>
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
                                          <h3>Fill  Faculty Details</h3>
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body">
                                         <form method="post"  enctype="multipart/form-data">
										   
                                            <div class="col-sm-6 form-group">
                                                <label> Name</label>
                                                <input type="text" name="name" placeholder="Enter  Name" value="<?php echo $name;?>" class="form-control" required="required">
                                            </div>
											




											 <div class="col-sm-6 form-group">
                                                <label> Collage Id</label>
                                                <input type="text" name="clgid" placeholder="Enter Collage id" value="<?php echo $clgid;?>" class="form-control" required="required">
                                            </div>
											

											 <div class="col-sm-6 form-group">
                                                <label> Username</label>
                                                <input type="text" name="username" value="<?php echo $username;?>" placeholder="Enter Username " class="form-control" required="required">
                                            </div>
											


											 <div class="col-sm-6 form-group">
                                                <label> Password</label>
                                                <input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Enter Password " class="form-control" required="required">
                                            </div>
											
											
										
										   
										   
                                            

                                              <div class="col-sm-12 reset-button">
                                                
                                                 
												 <input type='submit' name="submit" value="Update Faculty" class="btn btn-success">
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

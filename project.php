<?php session_start();
include('../config.php');
$MM_Username=$_SESSION['MM_Usernameadmin'];

if (isset($_POST['submit']))
{

    extract($_POST);



    $QuerygetData="INSERT INTO `admin`( `name`, `clgid`, `username`, `pass`, `role`) VALUES
     ('$name', '$clgid', '$username', '$pass', 'Faculty')";
$GetDataResult=mysqli_query($conn,$QuerygetData);
if($GetDataResult)
{
    $msg='<div class="alert alert-success" role="alert">Faculty  Add Successfully</div>';
     
 
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
                            <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>  
                            <h1>Project</h1>
                            <small> </small>&nbsp;&nbsp; <b ></b>
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
                                          <h3>Project</h3>
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="panel-body">
                                         <form >
										   
                                           
                    <table class="table">
                    	<tr>
                    		<th>Project Initiation</th>
                    		<th>First Review</th>
                    		<th>Final Review</th>
                    		<th>Project Report</th>

                    	</tr>
                    	<tr>
                    		<td><input type="checkbox" name=""></td>
                    		<td><input type="checkbox" name=""></td>
                    		<td><input type="checkbox" name=""></td>
                    		<td><input type="checkbox" name=""></td>
                    	</tr>

                    </table>
											
										   
                                            

                                           
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

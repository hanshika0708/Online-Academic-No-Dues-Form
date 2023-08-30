<?php session_start();
include('../config.php');

   $MM_Username=$_SESSION['MM_Usernameadmin'];
   @$refferalcode=$_SESSION['refferalcode'];
   @$PatiantSesId=$_SESSION['userid'];
   @$pid=$_SESSION['Id'];
  
$date=date('Y-m-d');

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'inc/style.php';?>
<style>
.panel-bd{
    background-color:#009688;
    color:white;
}
</style>
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
           <?php include 'inc/header.php'; ?>
            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                      
                    <div class="header-icon">
                        <i class="fa fa-tachometer"></i>
                    </div>
                    <div class="header-title">
                        <h1> Dashboard</h1>
                        <small> Dashboard features</small>
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="dashbord.php"><i class="pe-7s-home"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </section>
            <!-- Main content -->
                <section class="content">
                    <div class="row">
                        
                        
                        
                     
					
		
		                
					
					
                                        
                                
					
		 
		 
                        
                     
                     
						
                     
                     
                        
                        
                        
                        
                        
                    
                        
                        
                        
                   
                        
                        
                        
             
             
						
						
						
						
						
							 <!--
						
						   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						       
						       <a href='Withdrawcredit.php'>
                            <div class="panel panel-bd ">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h4>WIDTHDRAW AMOUNT REQUEST</h4>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-inr fa-2x"></i>
                                        
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
						-->
						
						
						
					
                        
                        
                        
                        
                        
                        
                        
						
						
						
						
						
                       
                       
                       
                     
                    </div>
                <div class="row">
                        
                       
                    </div> <!-- /.row -->
                </section> <!-- /.content -->

            </div> <!-- /.content-wrapper -->
          <?php include 'inc/footer.php';?>
        </div> <!-- ./wrapper -->
        <!-- ./wrapper -->
         <!-- Start Core Plugins
        =====================================================================-->
      <?php include 'inc/script.php';?>      

	  <!-- End Theme label Script
        =====================================================================-->
      
    </body>

</html>
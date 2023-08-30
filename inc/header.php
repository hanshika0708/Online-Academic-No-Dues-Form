    <?php 

 if(isset($_SESSION['autoid']))
 {}
else{echo "<script>window.location.href='../index.php'</script>";} 

$role=$_SESSION['role'];
$Sesname=$_SESSION['name'];
?>



 <header class="main-header" id='mainheader'>
                <a href="index.php" class="logo" id=''> <!-- Logo -->
                    <span class="logo-mini">
                        
                      <!--  <img src="../image/logo.png"  alt=""> -->
					  <h4>LOGO</h4>
                    </span>
                    <span class="logo-lg">
                        <!--<b>Admin</b>H-admin-->
						 <h4>LOGO</h4>
                        <!--  <img src="../image/logo.png" style="border-radius:20px;" alt=""> -->
                    </span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top "  >
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-tasks" style="color:white;">&nbsp;&nbsp;&nbsp; Management</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Orders -->
                            
                            
                           
                            <!-- Messages -->
                           
                            
                            
                            
                            <li class="dropdown messages-menu">
                               <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown"> 
                              
                            </a> </li>

                           
                            <li class="dropdown dropdown-user">
                                <a href="#" class="" data-toggle="dropdown"> 
                                <div class="user-image">
                                <h4 style="color:#f5d327;">WELCOME <?php echo ucfirst($_SESSION['MM_Usernameadmin'])?>&nbsp;&nbsp;<span class="fa fa-angle-down "></span></h4>
                                </div>
                                </a>
                                <ul class="dropdown-menu">
                                     
                                    <li><a href="signout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- =============================================== -->
            <!-- Left side column. contains the sidebar -->
          <aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        
                        
                           <div class="info">
                            <h4 style="color:white;"><?php echo $role;?> DASHBOARD</h4>
                            
                        </div>
                    </div>
                   
				   

                    <!-- sidebar menu -->
                    <ul class="sidebar-menu" id="ulmenu" >
                        
                     <?php if($role == 'Admin') {?>   
                          
                       
                        <li class="" >
                            <a href="AddFaculty.php"><i class="fa fa-dashboard "></i><span style="color:white;">Add Faculty</span>
                            </a>
                        </li>


    


                          <li class="" >
                            <a href="addStudent.php"><i class="fa fa-dashboard "></i><span style="color:white;">Add Student</span>
                            </a>
                        </li>
						
                          <li class="" >
                            <a href="addSubject.php"><i class="fa fa-dashboard "></i><span style="color:white;">Add Subject</span>
                            </a>
                        </li>
                        
                           <li class="" >
                            <a href="teacherAllotment.php"><i class="fa fa-dashboard "></i><span style="color:white;"> Teacher Allotment</span>
                            </a>
                        </li>
                        
                           <li class="" >
                            <a href="Tgalloted.php"><i class="fa fa-dashboard "></i><span style="color:white;"> TG Allotment</span>
                            </a>
                        </li>
                        
						
						
						 <li class="" >
                            <a href="addsection.php"><i class="fa fa-dashboard "></i><span style="color:white;"> Create Section</span>
                            </a>
                        </li>
                         <li class="" >
                            <a href="project.php"><i class="fa fa-dashboard "></i><span style="color:white;">Project </span>
                            </a>
                        </li>
						<!--
						 <li class="" >
                            <a href="addsection.php"><i class="fa fa-dashboard "></i><span style="color:white;"> Create Section</span>
                            </a>
                        </li>-->
						
                    <?php } ?>   

                <?php if($role == 'Student') {
                   
            
                    ?>   
				  <li class="" >
                            <a href="SHowAssingment.php?type=Assingment"><i class="fa fa-dashboard "></i><span style="color:white;">Assingment</span>
                            </a>
                        </li>
						
						 <li class="" >
                            <a href="SHowAssingment.php?type=Tutorial"><i class="fa fa-dashboard "></i><span style="color:white;">Tutorial</span>
                            </a>
                        </li>
												 <li class="" >
                            <a href="SHowAssingment.php?type=Practical"><i class="fa fa-dashboard "></i><span style="color:white;">Practical</span>
                            </a>
                        </li>
						
						
						 <li class="" >
                            <a href="academicdetails.php"><i class="fa fa-dashboard "></i><span style="color:white;">Academic Details</span>
                            </a>
                        </li>
						
						
                 








						
				 
				 
				 
				                    <?php } ?>  


                <?php if($role == 'Faculty') {
$Usernamename= $_SESSION['name'];
  $sql="SELECT * FROM `tgalloted` where     `teacher`= '$Usernamename' ";
     
                    $result = mysqli_query($conn, $sql);  
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {
                    
                    $teacher=$row['teacher'];
                     $student=$row['student'];
                    $Cource=$row['Cource'];
                    
                    $studentss=explode(',', $student);
                    
                    }}  ?> 
				
                        <li class="" >
                            <a href="TG.php"><i class="fa fa-dashboard "></i><span style="color:white;">TG</span>
                            </a>
                        </li>
						

     <li class="treeview">
                                            <a href="#">
                                                <i class="fa fa-dashboard"></i><span style="color:white;"> Subject  </span>
                                                <span class="pull-right-container">
                                                    <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                            </a>
                                            <ul class="treeview-menu">


                                              <!--   <li><a href="Assingment.php" > Assingment</a></li>

                                                 <li><a href="tourial.php" > Tutorial</a></li>
                                                
                                <li><a href="Studentpractical.php" > Practical</a></li> -->


                                <?php 
                         $sql="SELECT * FROM `addsubject` where `Cource`= '$Cource' ";
                    $result = mysqli_query($conn, $sql);  
                   if($result->num_rows > 0 )
                    { while ($row=mysqli_fetch_assoc($result)) {?>
                      

              <li><a href="Assingment.php?cource=<?php echo $row['subjectname'];?>" > <?php echo $row['subjectname'];?></a></li>

                  <?php }} ?>

                        </ul>      
                                                
                               
                                                 
                                                 </ul>
                                        </li> 





						
						
						
						

				
				                    <?php } ?>  									
					
            </ul>
			

			
        </div> <!-- /.sidebar -->
    </aside>

	
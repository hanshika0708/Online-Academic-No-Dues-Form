<?php
if (!isset($_SESSION)) {
  session_start();
  $OuptRes="";
}
include('config.php'); 
$msg="";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_POST['login_btn']))
{
   
    $username = test_input($_POST['username']);  
    $password = test_input($_POST['password']);  
    $Role = test_input($_POST['Role']);  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
    
       
      


              $sql = "select * from `admin` where `username` = '$username' AND `pass` = '$password'  ";  
      




        $result = mysqli_query($conn, $sql);  
        
          

        if($result){ 
     
        while($row = mysqli_fetch_assoc($result)) {
			$id=$row['id'];
			$name=$row['name'];
         $_SESSION['MM_Usernameadmin'] = $username;
         $type=$row['role'];
        
             
			  
			                if ($type == 'admin') {
								  header('location:Dashboard/index.php'); 
								  $_SESSION['role']="Admin";
								  $_SESSION['id'] = $username;
								  $_SESSION['autoid'] = $id;
								   $_SESSION['name'] = $name;
				  
			  }
			  
			  
			                if ($type == 'Student') {
								  header('location:Dashboard/index.php'); 
								  $_SESSION['role']="Student";
								  $_SESSION['id'] = $username;
								  $_SESSION['autoid'] = $id;
								   $_SESSION['name'] = $name;
				  
			  }
			  
			                if ($type == 'Faculty') {
								  header('location:Dashboard/index.php');
                                 $_SESSION['role']="Faculty";
								 $_SESSION['id'] = $username;
								 $_SESSION['autoid'] = $id;
								 $_SESSION['name'] = $name;
								 
								  
				  
			  }
			  
               }}   }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> LOGIN</title>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/dist/img/ico/favicon1.png" type="image/x-icon">
    

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap rtl -->
    <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Pe-icon-7-stroke -->
    <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
    <!-- style css -->
    <link href="assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style rtl -->
    <!--<link href="assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
</head>

<body>
    <!-- Content Wrapper -->
    <div class="login-wrapper">
        
        <div class="container-center">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>Login</h3>
                            <small><strong>Please enter your credentials to login.</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post"  >

                   <div class="form-group">
                            <label class="control-label" for="username">Role</label>
                           
                            
                            <select  required="" name="Role"  class="form-control"> 

                            <option value="admin">Admin </option>
                            <option value="Student"> Student</option>
                            <option value="Faculty">Faculty </option>


                            </select>

                        </div>






                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" name="username" id="username" class="form-control">

                            <span class="help-block small">Your unique username to app</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required="" name="password" id="password" class="form-control">
                            <span class="help-block small">Your strong password</span>
                        </div>
                        <div>
                            <button class="btn btn-primary" type='submit' name="login_btn">Login</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- jQuery -->
    <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>
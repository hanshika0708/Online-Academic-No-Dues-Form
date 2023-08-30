
<?php 
require 'vendor/autoload.php';
   include('PHPMailerAutoload.php');
   $mail=new PHPMailer;
   $mail->isSMTP();
   $mail->Host="smtp.gmail.com";
   $mail->Port=587;
   $mail->SMTPSecure="tls";
   $mail->SMTPAuth=true;
   $mail->Username="onpriceinfo@gmail.com";
   $mail->Password="xylsdiabnkkbquub";
   $mail->SetFrom("onpriceinfo@gmail.com");
   $mail->addAddress($email);
  
   $mail->IsHTML(true);
   
   $mail->Subject="Certificate Verify";
   $mail->Body='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
   
</head>

<body>
   <div class="page" style="height: 550px; 
  width: 300px;
  padding: 25px;
  margin: 20px;
  text-align: center;
  background: #1abc9c;
  color: white;">
    
    <div class="dialoguebox" style=" height: 50px; 
  width: 120px;
  padding: 25px;
  margin-left: 70px;
  background: white;
  border-radius: 8px;
  color: black; ">
     
      <h5>'.$name.'</h5><br>
     
     
     
    </div>
  
    <p>
        <i>Your Certificate  Verify SuccessFully</i>
    </p>
   
    <p>
      <i> More Details Click one of the links below</i>
    </p>
    <div class="really">
      <p><a href="http://onpriceinfo.com/" style="text-decoration:none;">
    ONPRICEINFO.COM
    </a> </p>
    </div>
   </div> 
  
</body>
</html>';
   $mail->SMTPOptions=array('ssl'=>array(
      'verify_peer'=>false,
      'verify_peer_name'=>false,
      'allow_self_signed'=>false
   ));
   if($mail->send()){
      // echo "Mail send";
   }else{
      // echo "Error occur";
   }
   ?>
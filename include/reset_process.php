<?php
include("include/config.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

date_default_timezone_set('Etc/UTC');

require 'phpmailer/vendor/autoload.php';


   
  $email_err = "";
    $email =  $success = "";




if ($_SERVER["REQUEST_METHOD"] == "POST"){

  $email = $_POST['email'];



  
  
 //check for unique password 
 
 $column = array(); 
 $get_email = "select email from users";
 $run_email = mysqli_query($connect,$get_email);
while($column_email = mysqli_fetch_array($run_email)){
  $column[] = $column_email[0];
}

 

 
  //the next code is for checking the form data
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

  if (empty($_POST["email"])) {
    $email_err = "<div class='alert alert-danger'>
    <strong>ERROR:</strong> Email Address is required
  </div>";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "<div class='alert alert-danger'>
      <strong>ERROR:</strong> Invalid Email format
    </div>";
    }elseif(!in_array($email,$column)){
      $email_err = "<div class='alert alert-danger'>
      <strong>ERROR:</strong>This Email is not registered with Xfactormining.com
    </div>";
  }
  }
  
  //if validation is satified then create a token for the user 
  
  
        if ($email_err == ""){
            $get_user = "select * from users where email = '$email'";
            $run_user = mysqli_query($connect,$get_user);
            $row_user = mysqli_fetch_array($run_user);
            $first_name = $row_user['first_name'];
            $last_name = $row_user['last_name'];
            $token = substr(md5(time()) , 0 , 10);

            $update_password = "UPDATE users SET password_user = '$token' where email = '$email'";
            $run_password = mysqli_query($connect,$update_password);
            
        
         
          //Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.privateemail.com';  // Specify main and backup SMTP servers
//$mail->SMTPDebug  = 2;    
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $email_admin1;                 // SMTP username
$mail->Password = $password_admin1;                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

//Set the encryption mechanism to use - STARTTLS or SMTPS

$mail->SMTPOptions = array(
  'ssl' => array(
  'verify_peer' => false,
  'verify_peer_name' => false,
  'allow_self_signed' => true
  )
  );



//Set who the message is to be sent from
//For gmail, this generally needs to be the same as the user you logged in as


//Set who the message is to be sent to
$mail->addAddress($email);

//Set the subject line
$mail->Subject = 'Reset Logins: Xfactormining Plc ';

//Read an HTML message rody from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->isHTML(true);
$mail->CharSet = PHPMailer::CHARSET_UTF8;
$mail->setFrom($email_admin1,$last_name);
$mail->From = $email_admin1;
$mail->addCC($email_admin1);
$mail->addBCC($email_admin1);
$mail->AddEmbeddedImage('assets/images/logo.png', 'logo', 'assets/images/logo.png'); 
//Replace the plain text body with one created manually
$mail->Body="
<p style='text-align:center;';> <img alt='PHPMailer' src='cid:logo'></p>
<p align=left> 

Hello $first_name $last_name
Your Password has now been reset! Your new password is below
<br/>
Email address: $email
<br>
Password : $token

<br/>
Regards, $site_name3

</p>";


//Attach an image file


//send the message, check for errors
if (!$mail->send()) {
 
    $success= "<div class='alert alert-success'>
    <strong>Success</strong> Thank you $first_name for reseting your password! Check your Email for your new password, You will be redirected to your login page shortly
  </div> ";
   echo"<script>
   setTimeout(function(){
      window.location.href = 'indexc30b.php';
   }, 10000);
</script>";
} else{

     $success= "<div class='alert alert-success'>
     <strong>Success</strong> Thank you $first_name for reseting your password! Check your Email for your new password, You will be redirected to your login page shortly
   </div> ";
    echo"<script>
    setTimeout(function(){
       window.location.href = 'login.php';
    }, 10000);
 </script>";
}
     
    
}
}

  

      


        
  

?>
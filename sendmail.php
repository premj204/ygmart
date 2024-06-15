<?php
$to = " premj204@gmail.com";
$subject = "Contact Form";
$name = (isset($_POST['name']) && !empty($_POST['name'])) ? $_POST['name'] : "";
$email = (isset($_POST['email']) && !empty($_POST['email'])) ? $_POST['email'] : "";
$mobile = (isset($_POST['mobile']) && !empty($_POST['mobile'])) ? $_POST['mobile'] : "";
$message = (isset($_POST['message']) && !empty($_POST['message'])) ? $_POST['message'] : "";

$fileData = file_get_contents("mailer/contact_mail.html");
$fileData = str_replace('#_name_#',$name,$fileData);
$fileData = str_replace('#_email_#',$email,$fileData);
$fileData = str_replace('#_mobile_#',$mobile,$fileData);
$fileData = str_replace('#_message_#',$message, $fileData);

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$name." ".$email."" . "\r\n";
$headers .= "Cc: Yogesh <yogesh@mobisoftseo.com>" . "\r\n"; 


if(mail($to,$subject,$fileData,$headers))
{
  $data['status']="200";
  $data['msg']="We will contact you soon.";
}else{            
  $data['status']="400";
  $data['msg']="Sorry! Please send the enquiry again.";
};
?>


<style>
  /* Loading animation styles */
  .loader {
    border: 6px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #f26608; /* Blue */
    border-radius: 50%;
    width: 70px;
    height: 70px;
    animation: spin 2s linear infinite;
    margin: auto;
    position: absolute;
    top: 0; left: 0; bottom: 0; right: 0;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
</style>

  <div class="loader"></div>
  <script>
    // Redirect after 3 seconds (adjust as needed)
    setTimeout(function() {
      window.location.href = 'contact.php';
    }, 200);
  </script>














<!-- <section style="margin-top: 10%;">
<div align="center">
   <p>&nbsp;</p>
</div>
<div>
   <center>
<img src="./assets/img/thankyou.png" class="thanks">
      <p><b>Thank you </b> <br> Your information has been sent and we will respond shortly.</p>
      <p class="go"><a href="index.php">Click here to continue</a></p>

   </center>
</div>
</section>

<style>
  body {
   background-color: white;
   margin-left: 0px;
   margin-top: 0px;
   margin-right: 0px;
   margin-bottom: 0px;
}
a:link {
   color: rgb(51, 51, 51);
   text-decoration: none;
}
a:visited {
   text-decoration: none;
   color: rgb(51, 51, 51);
}
a:hover {
   text-decoration: none;
   color: green;
}
a:active {
   text-decoration: none;
   color: rgb(51, 51, 51);
}
.thanks{}
center img {
   height: 400px;
}

body,
td,
th {
   color: black;
   font-size: 20px;
}

p {
   transition-duration: 0.2s;
   -webkit-transition-duration: 0.2s;
}

a {
   transition-duration: 0.2s;
   -webkit-transition-duration: 0.2s;
}

a:link {
   color: #993300;
   text-decoration: none;
}

body {
   background-color: white;
   margin-left: 0px;
   margin-top: 0px;
   margin-right: 0px;
   margin-bottom: 0px;
   overflow-x: hidden;
}

a:link {
   color: rgb(51, 51, 51);
   text-decoration: none;
}

a:visited {
   text-decoration: none;
   color: rgb(51, 51, 51);
}

a:hover {
   text-decoration: none;
   color: green;
}

a:active {
   text-decoration: none;
   color: rgb(51, 51, 51);
}

center:hover .go {
   color: limegreen;
   transition-duration: 0.2s;
   -webkit-transition-duration: 0.2s;
}

.go {
   position: relative;

   background-color: inherit;
   border-radius: 0.2em;
   padding: 0 02px;
   margin: 0 -2px;
   transition-duration: 1.2s;
   -webkit-transition-duration: 1.2s;
}

</style> -->





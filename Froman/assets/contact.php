<?php
$to      = 'fromaninteractive@gmail.com';
// define variables and set to empty values
$name = $company = $email = $phone = $website = $project = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $message  .= "Name:    ".$_POST["name"]. "\r\n"; 
   $message  .= "Company: ".$_POST["company"] . "\r\n";
   $message  .= "E-mail:  ".$_POST["email"]. "\r\n";
   $message  .= "Phone:   ".$_POST["phone"] . "\r\n";
   $message  .= "WebSite: ".$_POST["website"]. "\r\n";
   $message  .= "Project: ".$_POST["comment"]. "\r\n";
}

$subject = "Correo de contacto formulario";
$headers = "From:  fromaninteractive@gmail.com ". "\r\n" . 
 "Reply-To: noreply@frinteractive.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
if(mail($to, $subject, $message, $headers)){  
    echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..  
echo 'smtp';
}else{  
    echo 'failed';// ... or this one to tell it that it wasn't sent  
} 
if(imap_mail($to, $subject, $message, $headers)){
    echo 'sent';
    echo 'impa'; // we are sending this text to the ajax request telling it that the mail is sent..  
}else{  
    echo 'failed';
   echo 'impa';// ... or this one to tell it that it wasn't sent  
} 


?>
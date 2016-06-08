<?php
$to      = 'froman@testfromaninteractive.net23.net';
$subject = 'the subject';
$message = 'hello world';
$headers = 'From:somemail@mail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){  
    echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..  
echo 'smtp';
}else{  
    echo 'failed';// ... or this one to tell it that it wasn't sent  
} 

if(imap_mail($to, $subject, $body, $headers){
    echo 'sent';
    echo 'impa'; // we are sending this text to the ajax request telling it that the mail is sent..  
}else{  
    echo 'failed';
   echo 'impa';// ... or this one to tell it that it wasn't sent  
} 

$to      = 'fromaninteractive@gmail.com';
// define variables and set to empty values
$name = $company = $email = $phone = $website = $project = "";
message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $message  .= $_POST["name"]; 
   $message  .= $_POST["company"];
   $message  .= $_POST["email"];
   $message  .= $_POST["phone"];
   $message  .= $_POST["website"];
   $message  .= ($_POST["project"];
}

$subject = 'Correo de contacto formulario';
$headers = 'From: ' . $email . "\r\n" . 
 'Reply-To: noreply@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
if(mail($to, $subject, $message, $headers)){  
    echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..  
echo 'smtp';
}else{  
    echo 'failed';// ... or this one to tell it that it wasn't sent  
} 
if(imap_mail($to, $subject, $message, $headers){
    echo 'sent';
    echo 'impa'; // we are sending this text to the ajax request telling it that the mail is sent..  
}else{  
    echo 'failed';
   echo 'impa';// ... or this one to tell it that it wasn't sent  
} 

}
?>
<html>
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
  
   <body>
      
      <?php
         $to = "test@gmail.com";
         $subject = "This is subject";
         
         $message = "<h3>This is HTML message.</h3>";
         
         // To send HTML mail, the Content-type header must be set
         $header = "MIME-Version: 1.0\r\n";
         $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

         // Additional headers
         //$header .= 'To: user2 <user2@gmail.com>, user3 <user3@gmail.com>';
         $header .= 'From: user1 <test@gmail.com>';
         //$header .= 'Cc: test@example.com'; 
         //$header .= 'Bcc: test@example.com';
         

         $send_mail = mail($to,$subject,$message,$header);
         
         if( $send_mail == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>

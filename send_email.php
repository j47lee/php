<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sending Email</title>
  </head>
  <body>
  <div class="">
    <?php

      $to='phishingg@gmail.com';
      $subject='How are you?';
      $body='Hey this is Jonathan. How are you doing?';
      $header='From: jonathan@gmail.com';

      if (mail($to,$subject,$body,$header)) {
        echo "Mail sent successfully";
      } else {
        echo "Mail not sent";
      }

    ?>
  </div>
  </body>
</html>

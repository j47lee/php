<!doctype html>
<html>
<head>
<title>My First Webpage</title>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
  <div>

  <?php

  $names = array('Jonathan','Melissa','Olivia');

  print_r($_POST);

   if ($_POST["submit"]) {

       if ($_POST["name"]) {

         foreach ($names as $name) {

           if ($_POST['name']==$name) {

             echo 'Hello'

           }

         }

       } else {

       echo "I don't know you";

       }

   }


  ?>

  <form method="post">

  <label for="name">Name</label>
  <input name="name" type="text" />
  <input type="submit" name="submit" value="Submit Your Name" />
  </form>

  </div>
</body>
</html>

<?php include 'autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
  <div class="w-25 m-auto mt-5 ">
      <h1 class="m-auto">Edit</h1>
      <?php 
          $form = new Form();
          $form->create('process.php');
          $form->input('Username','text','username');
          $form->input('Email','email','email');
          $form->input('Password','password','password');
          $form->submit('register');
          $form->end();
      ?>
  </div>
</body>
</html>
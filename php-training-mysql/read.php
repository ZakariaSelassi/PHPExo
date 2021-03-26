<?php include 'db.php'?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table class="table table-dark">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>

    <?php 
        $sql = $db->prepare("Select * from hiking");
        $sql->execute();
       
        while($data = $sql->fetch())
        {?>
        <?php
        }
    ?>
      <!-- Afficher la liste des randonnées -->
    </table>
  </body>
</html>
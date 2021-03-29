<?php include 'db.php'?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="row d-flex justify-content-center mx-auto w-50" >
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
      <!-- Afficher la liste des randonnées -->
    <?php 
        $sql = $db->prepare("Select * from hiking");
        $sql->execute();
               
        while($data = $sql->fetch())
        {
          echo "<tr>
          <td>".$data['id']."</td>
          <td>".$data['name'] ."</td>
          <td>".$data['difficulty']."</td>
          <td>".$data['distance']."</td>
          <td>".$data['duration']."</td>
          <td>".$data['height_difference']."</td></tr>";
        }
    ?> 

  
  </table>
      <div class="row">
        <button type="button" class="btn btn-dark text-wrap"><a href="create.php">  Add new one</a></button>
      </div>
  </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <div><label>Ville</label>    
  <input type="text" name="ville" id="ville">
  <label>Haut</label>
  <input type="text" name="haut" id="haut">
  <label>Bas</label>
  <input type="text" name="bas" id="bas">
  <button type="submit" name="submit" id="send">Send to DB</button></div>
  
  <?php include 'verification.php'?>
  <?php
    include 'db.php';
    $sql = $bd -> prepare("Select * from météo");
    $sql -> execute();
    while($data = $sql->fetch()){ ?>
      <tr>
        <td><input type="checkbox" name="name[]" value="<?php echo $data['ville'];?>"></td>
        <td><?php echo $data['ville']?></td>
      </tr>
    <?php
    } ?>
  <button type="submit" name="delete" id="delete">Delete from DB</button>
  <?php
    include 'delete.php';
  ?>
</form>
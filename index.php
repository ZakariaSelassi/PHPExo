
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
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
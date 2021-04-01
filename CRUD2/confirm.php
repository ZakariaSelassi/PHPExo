<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php include 'db.php' ?>
   <table>
    <thead>
        <tr>
            <th>Prix</th>
            <th>Booking</th>
        </tr>
    </thead>
    <?php foreach($data as $item):?>
    <tr>
        <td> <?php echo $data['price']; ?> </td>
        <td> <?php echo $data['bookingsId'];?></td>
        <td>   <a href='confirm.php?id=<?php $data['id'];?>'> Delete</a> </td>
    </tr>
  
    <?php endforeach; ?>
   </table>
</body>
</html>
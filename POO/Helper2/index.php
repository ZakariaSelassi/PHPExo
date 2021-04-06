<?php require 'Helper2.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $html = new Html();
        $html->createMeta();
        $html->creatStyle('stylesheet','style.css');
    ?>
    <title>Document</title>
</head>
<body>
    <?php 
    $img = new Html();
    $img->imageLink('jess.jpg')
    ?>
</body>
<?php
    $js = new Html();
    $js->createJS('script.js'); 
?>
</html>
<?php 

if(isset($_POST['delete'])){
    $check = $_POST['name'];
    foreach ($check as $vil) {
        $ville = $_POST['name'];
        $res = $bd->prepare("DELETE from météo where ville='$vil'");
        $res->execute();
        
    }
    echo "on est la ";
}
?>




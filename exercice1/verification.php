<?php
    include 'db.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ville = $_POST["ville"];
    $haut = $_POST["haut"];
    $bas = $_POST["bas"];
    $error = "";
        if (empty($ville) || empty($ville) || empty($ville)) {
            $error = "Champ need to be complet.";
        } else {
            if (!preg_match("/^[a-zA-Z-' ]*$/", $ville)) {
                $error = "Only string charactere are allowed";
            } elseif (!preg_match("/^\d{2}$/", $haut) || !preg_match("/^\d{2}$/", $bas)) {
                $error = "Only 2 numbers are allowed";
            } else {
                $sql = $bd->prepare("INSERT INTO météo (ville,haut,bas) VALUES (:ville,:haut,:bas)");
                $sql->execute(array('ville' => $ville, 'haut' => $haut , 'bas' => $bas));
                $error = "Message Sent !";
                echo $error;
                header("Location:contact.php");
            }
        }
  }

?>
<?php 
    include 'dbConnect.php';

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $firstName = $_POST['firstName'];
        $dob = $_POST['birthDate'];
        $fidelity = $_POST['fidelity'];
        $cardNumber = $_POST['cardNumber'];
        if(!empty($_POST['name']) && !empty($_POST['firstName']) && !empty($_POST['birthDate']) &&!empty($_POST['fidelity']) && !empty($_POST['cardNumber'])){
            $sql = $db -> prepare("INSERT INTO clients (lastName,firstName,birthDate,card,cardNumber) values (:lastName,:firstName,:birthDate,:card,:cardNumber)");
            $sql->execute([
                'lastName' => $_POST['name'],
                'firstName' =>$_POST['firstName'],
                'birthDate' => $_POST['birthDate'],
                'card' => $_POST['fidelity'],
                'cardNumber' => $_POST['cardNumber']
            ]);
            echo "Ok";
            header("Location:content.php");
        }else{
            echo "Error";
        }
    }

?>
<?php 
    include 'dbConnect.php';

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $firstName = $_POST['firstName'];
        $dob = $_POST['birthDate'];
        $fidelity = $_POST['fidelity'];
        $cardNumber = $_POST['cardNumber'];
        $typeCard = $_POST['typeCard'];
        if(!empty($_POST['name']) && !empty($_POST['firstName']) && !empty($_POST['birthDate']) &&!empty($_POST['fidelity']) && !empty($_POST['cardNumber']) && !empty($_POST['typeCard'])){

            $querry = $db -> prepare("INSERT INTO cards (cardTypesId,cardNumber)  
            SELECT cards.cardTypesId , cards.cardNumber FROM clients inner join cards on cards.cardNumber = clients.cardNumber");
            $querry->execute( [
            'lastName' => $_POST['name'],
            'firstName' =>$_POST['firstName'],
            'birthDate' => $_POST['birthDate'],
            'card' => $_POST['fidelity'],
            'cardNumber' => $_POST['cardNumber'],
            'cardTypesId' => $_POST['typeCard']
            ]);
            /*$sql = $db -> prepare("INSERT INTO clients (lastName,firstName,birthDate,card,cardNumber) values (:lastName,:firstName,:birthDate,:card,:cardNumber)");
            $sql->execute([
                'lastName' => $_POST['name'],
                'firstName' =>$_POST['firstName'],
                'birthDate' => $_POST['birthDate'],
                'card' => $_POST['fidelity'],
                'cardNumber' => $_POST['cardNumber']
            ]);*/
            if($fidelity == 1)
            {
                
            var_dump($querry);
            echo "Ok";
            
            }else{
                echo "errorrrrr";
            }
            //header("Location:form.php");
            
           
        }else{
            echo "Error";
        }
    }

?>
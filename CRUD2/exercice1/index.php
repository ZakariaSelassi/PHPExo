<?php include 'dbConnect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create.php" method="POST">
    <div>
    name : <input type="text" name="name">
    </div>
        <div>
        firstName : <input type="text" name="firstName">
        </div>
        <div>
        birthDay : <input type="date" name="birthDate">
        </div>
        <p>Fidelity</p>
        <div>
            <input type="radio" name="fidelity" value="1">
            <label for="agree"> Agree</label>
        </div>
        <div>
            <input type="radio" name="fidelity" value="0">
            <label for="desagree"> desagree</label>
        </div>
        cardeNumber : <input type="number" name="cardNumber">
        <button type="submit" name="submit">Add to db</button>
    </form>
</body>
</html>
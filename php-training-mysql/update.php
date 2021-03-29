<?php 
	require('db.php');
	if(isset($_GET['id']))
	{
		if(!empty($_POST))
		{
		$id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $difficulty = isset($_POST['difficulty']) ? $_POST['difficulty'] : '';
        $distance = isset($_POST['distance']) ? $_POST['distance'] : '';
        $duration = isset($_POST['duration']) ? $_POST['duration'] : '';
		$height_difference = isset($_POST['height_difference']) ? $_POST['height_difference'] : '';
		$stmt = $db -> prepare('UPDATE hiking SET id = ?, name = ?, difficulty = ?, distance = ?, duration = ?, height_difference = ? where id = ?');
		$stmt->execute([$id,$name,$difficulty,$distance,$duration,$height_difference,$_GET['id']]);
		header('Location: read.php');
		}
		$sql = $db -> prepare("select * from hiking where id = ?");
		$sql->execute([$_GET['id']]);
		$data = $sql->fetch(PDO::FETCH_ASSOC);
	
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	
	<a href="read.php">Liste des données</a>
	<h1>Modifier</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="<?php echo $data['name']?>">
		</div>
		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="<?php echo $data['difficulty']?>"> <?php echo $data['difficulty']?></option>
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="<?php echo $data['distance']?>">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="<?php echo $data['duration'] ?>">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="<?php echo $data['height_difference']?>">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>
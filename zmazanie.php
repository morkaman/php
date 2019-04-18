<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php require_once("pripojenie.php");
	try{	
	$stmt = $conn->prepare("DELETE FROM artists WHERE id=:id");
	$stmt->bindParam(":id",$id);
	$id = filter_input(INPUT_POST,'id', FILTER_VALIDATE_INT);
	$stmt->execute();
	echo "<br>zmazane z db";
}
	catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	//mazanie udajov z tabulky
	?>
	<form method="get" action="index.php">
    <button type="submit">Continue</button>
</form>
</body>
</html>
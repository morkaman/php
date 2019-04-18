<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$artistname=$_POST["artistname"];
	$albums=$_POST["albums"];
	require_once("pripojenie.php");
	try{
	$sql = "CREATE TABLE IF NOT EXISTS ARTISTS (
                ID int(11) AUTO_INCREMENT PRIMARY KEY,
                artistname varchar(30) NOT NULL)";
    $conn->exec($sql);   
	// vytvorenie tabulky, pokial uz taka neexistuje
	$stmt = $conn->prepare("INSERT INTO artists (artistname,albums)
	VALUES (:artistname, :albums)");
	$stmt->bindParam(":artistname", $artistname);
	$stmt->bindParam(":albums", $albums);
	
	$stmt->execute();
	echo "<br>pridane do db";}
	//pridanie zaznamu do tabulky pomocou parametrov
	
	catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
?>
	
	<form method="get" action="index.php">
    <button type="submit">Continue</button>
</body>
</html>
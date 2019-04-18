<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
<?php	
$servername = "localhost";
$username = "morkaman";
$password = "blbeheslo";
	
	try {
    $conn = new PDO("mysql:host=$servername;dbname=skuskatest", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; }
	
	catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	// pripojenie k DB pomocou PDO 
	//neuspesne pripojenie k DB
//$conn = null; //ukoncenie pripojenia k DB
	
	
	
	
	
	
	?>
</body>
</html>
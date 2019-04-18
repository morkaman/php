

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&amp;subset=latin-ext" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
	
	<?php require_once("pripojenie.php");
	$stmt = $conn->prepare("SELECT * FROM artists");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);?>
</head>

	
<body>
	
		<?php for ($j=1; $j<=5; $j++): ?>
<table style="width:100%">
	
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>
	<?php endfor; ?>

	<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 10; $row++) { 
		
		if ($row %3 ===0){$row = $row+1;
		
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}}
		echo "</table>";
?>
	<br>
	<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 10; $row++) { 
		
		if ($row %1 ===0){
		
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}}
		echo "</table>";
	
?>
<div class="col-sm-4 col-md-4 ">
<form action="pridanie.php" method="post" id="#" role="form" >
    <div class="form-group">
        <label for ="item">Artist Name</label>
        <input type="text" class="form-control" name="artistname" id="artistname" required/>
    </div>
    <div class="form-group">
        <label for="popis">Albums</label>
        <textarea class="form-control"  rows="2" name="albums" id="albums" required></textarea>
    </div>
    
    <div class="form-group">
        <label for="cena">Cena:</label>
        <input type="number"    class="form-control" name="cena" id="cena"/>
    </div>
    <div align="center" class=" boxy col-sm-12 col-md-12 col-lx-12">
        <input type="submit" class="btn" value="VLOZIT"/>
    </div>
</form>
</div>	

	<table class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>artist name</th>
                <th>album</th>
               
                <th>zmazanie</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($stmt->fetchAll() as $artists => $artist) { ?>
            <tr>
                <td><?= $artist['ID'];?></td>
                <td><?= $artist['artistname'];?></td>
                <td><?= $artist['albums'];?></td>
               
                <td>
                    <form action="zmazanie.php" method="post">
                        <input type="hidden" name="id" value="<?= $artist['ID']; ?>">
                        <input type="submit" class="btn" value="ZMAZANIE"/>
                    </form>
                </td>
            </tr>
            <?php }?>
            </tbody>
        </table>
	
</body>
</html>
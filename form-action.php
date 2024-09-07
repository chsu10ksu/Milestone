<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="rcstyle.css">
	<title>Submission Form</title>
</head>

<body>
<?php include 'navigation.php';?>
<h2>Thank you</h2>
<h2>Your submission has been received.</h2>
<div class="submission">
<p>First Name: <?php echo $_POST["firstname"]?></p>
<p>Last Name: <?php echo $_POST["lastname"]?></p>
<p>Citizenship: <?php echo $_POST["citizenship"]?></p>
<p>Street Address: <?php echo $_POST["address"]?></p>
<p>City: <?php echo $_POST["city"]?></p>
<p>State: <?php echo $_POST["state"]?></p>
<p>ZIP Code: <?php echo $_POST["zipcode"]?></p>
<p>Email: <?php echo $_POST["email"]?></p>
<p>Phone Number: <?php echo $_POST["phonenumber"]?></p>
<p>Student Status: <?php echo $_POST["status"]?></p>
<p>Days of the Week Available: 
    <?php 
        $length=count($_POST["availableday"]);
		for ($i=0;$i<$length;$i++)
		echo $_POST["availableday"][$i].', ';
    ?>
</p>
<p>Experience: <?php echo $_POST["experience"]?></p>
<p>Submit Date: <?php echo $_POST["submitday"]?></p>
</div>
<br>
<button id="editresponse" onclick="window.history.back();">Edit Your Response</button>
    <br>
        <?php include 'footer.php';?>
    </body>
</html>

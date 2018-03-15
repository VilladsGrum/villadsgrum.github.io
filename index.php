<!DOCTYPE HTML>
<html>
<head>
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.min.css">
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="text" name="person_name" id="person_name_id" class="person_name_class" required placeholder="Navn">
	<input type="text" name="person_lastname" id="person_lastname_id" class="person_lastname_class" required placeholder="Efternavn">
	<input type="submit" value="Submit" name="submit">
</form>
</body>
</html>
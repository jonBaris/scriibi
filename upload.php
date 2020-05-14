<!--
filename: [Alican Baris]
author: [Alican Baris]
created: [30/08/2019]
last modified: [30/08/2019]
description: [assignment1a]
-->
<!DOCTYPE html>

<html lang="en">

<?php
<head>
	<meta charset="utf-8" />
	<meta name="description" content="photo uploader" />
	<meta name="keywords" content="Assignment1A" />
	<meta name="author" content="Alican Baris" />

  <title>Cloud Assignment1A</title>
</head>

<body>
	<header>
		<h1>Photo Uploader</h1>
	</header>
	<p>Student ID: 102019192</p>
	<p>Name: Alican Baris</p>


<form id="form" method="post" action="upload.php">
	<fieldset>
		<legend>Upload Photos here</legend>
        <p><label for="photoTitle">Photo Title</label>
					<input type="text" name= "photoTitle" id="photoTitle" size="20" maxlength="25"/></p>

				<p><label for="selection">Select a photo</label>
					  <input type="file" name="file"><br><br>

			 	<p><label for="description">Description</label>
					<input type="text" name= "description" id="description" size="20" maxlength="25"</p>

				<p><label for="date">Date</label>
					<input type="text" name= "date" id="date" size="10" maxlength="20"</p>

			<p><label for="keywords">Keywords (seperated by a semicolumn, e.g. keyword1;keyword2; etc.):</label>
				<input type="text" name= "keywords" id="keywords" size="30" maxlength="25"</p>

			<p><input type= "submit" value="Upload"/></p>
		</fieldset>
</form>

<footer>
    <p><a href="getphotos.php">Photo Album</a></p>
</footer>

</body>
?>
</html>

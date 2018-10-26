<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <title>PHP and MySql</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php 
 /* Som ni märker kan man bryta och återuppta php-kod som exekveras genom start och sluttag för php */
error_reporting(0); /* Inga felmeddelanden visas */
require 'get_vars.php'; /* Denna fil läses och exekveras  */
if (isset ($id)) {
	 require 'select_single.php'; /* Denna fil läses och exekveras om variabeln har ett värde */
} 
?>
<div class="banner">
<h1>Hello <img class="logo" src="images/php.png" alt="PHP" title="PHP"> and <img class="logo" src="images/mysql.png" alt="MySql" title="MySql"></h1>
</div>
<p></p>
<div class="menu_container">
  <div class="menu">
  <a href="index.php">Start</a>
  	<a href="index.php?link=5">Connect</a>
    <a href="index.php?link=1">Select</a>
    <a href="index.php?link=2">Update</a>
    <a href="index.php?link=3">Insert</a>
	<a href="index.php?link=4">Delete</a>

	<p></p>
  </div>
  <form action="index.php" method="POST">
  <div class="main">
	<?php
	require 'select.php';
    ?>	
	<p></p>
  </div>

  <div class="right">
    <h4>Action</h4>
	<textarea   placeholder="Förnamn" rows="1" name="first_name"><?php echo $first_name; ?></textarea>
	<p></p>
	<textarea  placeholder="Efternamn" rows="1" name="last_name"><?php echo $last_name; ?></textarea>
	<p></p>
	<input type="hidden" name="update_id" value="<?php echo $id; ?>">
	<input class="button" type="submit" name="update" value="Uppdatera">
	<p></p>
	<input class="button" type="submit" name="insert" value="Skapa ny">
    <p><?php echo $update_message ?></p>
  </div>

</div>
</form>
<p></p>
<footer>© Lasse liten blues</footer>

</body>
</html>

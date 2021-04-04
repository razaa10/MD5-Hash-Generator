<!DOCTYPE html>
<head><title>Create MD5</title></head>
<body>
	<h1>MD5 Encoder</h1>
	<p>This will create a MD5 hash of any string, number or a combination of both</p>
	<pre>
		<?php

		$encoded = "Not Computed";
		
		if(isset($_GET['code'])){
		
           $encoded = hash('md5', $_GET['code']);
		} 
		?></pre>
		<p>MD5 Hash: <?= htmlentities($encoded); ?></p>
		<form>
			<input type = "text" name = "code" size = "40" required />
			<input type = "submit" value = "Create MD5" />

		</form>
		<ul>
			<li><a href = "md5maker.php">Reset</a></li>
			<li><a href="index.php">Back to previous page</a></li>
		</ul>
</body>
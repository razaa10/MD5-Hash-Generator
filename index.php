<!DOCTYPE html>
<head><title>MD5 Decoder</title></head>
<body>
	<h1>Raza's MD5 cracker</h1>
	<p>This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN. </p>
	<pre>
Debug output:
<?php

	$result = "Not Found";

	if(isset($_GET['md5'])){
		$time_initial = microtime(true);
		$md5 = $_GET['md5'];
	
$num = "0123456789";
$show = 15;

for($i = 0; $i<strlen($num); $i++){
	$n1 = $num[$i];

	for($j = 0; $j<strlen($num); $j++){
		$n2 = $num[$j];
	   
        for($k = 0; $k<strlen($num); $k++){
	   	    $n3 = $num[$k];

	   	    for($l = 0; $l<strlen($num); $l++){
	   	      	$n4 = $num[$l];
                    
                    $try = $n1.$n2.$n3.$n4;

                    $check = hash('md5', $try);
                    if($check == $md5){
                    	$result = $try;
                    	break;
                    }
                 if ($show>0){
                    print "\n$check $try";
                   	$show = $show -1;
                   }
	   	    }
        }
    }
}

$time_final = microtime(true);
print "\nElapsed time: ";
print $time_final - $time_initial."<br>";

} // all this code in the starting if block and will only run if the parameters are not null 
?></pre>
<p>PIN: <?= htmlentities($result); ?></p>
<form>
<input type = "text" name = "md5" size = "40" required />
<input type = "submit" value = "Crack MD5" />
</form>
<ul>
<li><a href = "index.php">Reset </a></li>
<li><a href="md5maker.php">Create MD5</a></li>
<!--<li>Visit <a href = "www.github.com">here</a></li>-->
</ul>
</body>
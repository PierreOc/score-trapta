<?php

	include 'authent.php';

	include 'dbconnect.php';

	// hide event
	$db->query("UPDATE `usertable` SET `show`=0 WHERE `username`='$username'");

	$file = fopen("data/$username/ranking.html","w");
	fwrite($file, "Pas d'information sur le classement individuel.");
	fclose($file);	
	$file = fopen("data/$username/positions.html","w");
	fwrite($file, "Pas d'information sur les positions.");
	fclose($file);	
	$file = fopen("data/$username/matches.html","w");
	fwrite($file, "Pas d'information sur les matches.");
	fclose($file);	
	$file = fopen("data/$username/teams.html","w");
	fwrite($file, "Pas d'information sur le classement par équipe.");
	fclose($file);	
	
	include 'dbdisconnect.php';

?>

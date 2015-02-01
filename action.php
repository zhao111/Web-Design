<?php
	/* --------------------------------------------------
		Options Informatqiue et MDBIT
		Janvier 2015
		Fichier de script
		
		Jean-Yves MARTIN
		Centrale NANTES
	-------------------------------------------------- */
	
	$restart = true;
	$login = "";
	$password = "";
	$memoriser = "";

	if (is_array($_POST)) {
		if (isset($_POST["login"])) {
			$login = $_POST["login"];
		}
		if (isset($_POST["password"])) {
			$password = $_POST["password"];
		}
		if (isset($_POST["Memoriser"])) {
			$memoriser = $_POST["Memoriser"];
		}

		if (($login == "prweb") && ($password == "itWorks")) {
			$restart = false;
		}
	}

	if ($restart) {
		$theFile = "index.html";
		$File = fopen($theFile, "r");
		$thesize = filesize($theFile);
		$data = fread($File, $thesize);
		fclose($File);
	
		$upper = strtoupper($data);
		if ((strpos($upper, "UTF8") > 0) || (strpos($upper, "UTF-8") > 0)) {
			$data = utf8_decode($data);
		}

		print $data;
	} else {
		print "<!DOCTYPE html>\n";
		print "<html lang=\"fr-fr\">\n";
		print "<head>\n";
		print "<title>... Success ...</title>\n";
		print "<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />\n";
		print "</head>\n";
		print "<body>\n";
		print "<p>It works !!!!</p>\n";
		print "<p>Your login was : $login</p>\n";
		print "<p>Your password was : ... do you really imagine I will write it ?</p>\n";
		if ($memoriser == 1) {
			print "<p>You asked saving informations</p>\n";
		} else {
			print "<p>You do not want me to save informations</p>\n";
		}
		print "</body>\n";
		print "</html>\n";
	}
?>
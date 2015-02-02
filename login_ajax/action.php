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
		print "Identifiants erronés";
	} else {
		print "<p>It works !!!!</p>\n";
		print "<p>Your login was : $login</p>\n";
		print "<p>Your password was : ... do you really imagine I will write it ?</p>\n";
		if ($memoriser == 1) {
			print "<p>You asked saving informations</p>\n";
		} else {
			print "<p>You do not want me to save informations</p>\n";
		}
	}
?>

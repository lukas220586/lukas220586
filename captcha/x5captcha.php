<?php
include("../res/x5engine.php");
$nameList = array("y4e","mfe","826","rds","454","ams","k6l","7yv","kl2","3lr");
$charList = array("T","W","A","6","R","T","Z","V","G","3");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php

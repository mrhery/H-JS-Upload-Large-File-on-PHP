<?php

$inputHandler = fopen('php://input', "r");

$fileHandler = fopen($_GET["name"], "w+");
while(true) {
	$buffer = fgets($inputHandler, 4096);
	if (strlen($buffer) == 0) {
		fclose($inputHandler);
		fclose($fileHandler);
		return true;
	}

	fwrite($fileHandler, $buffer);
}

?>

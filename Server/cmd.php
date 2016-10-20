<?php
if(isset($_POST['cmd'])) {
	$string = implode("", $_POST['cmd']);
	if(is_numeric($string))
		file_put_contents("cmd.txt", $string);
}
?>
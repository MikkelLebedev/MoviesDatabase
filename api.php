<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);
$data['password'] = "KickPHP";
/*
 * password: Skal udfyldes og være KickPHP
 * nameSearch: Valgfri
 */

header ('Content-Type: application/json; charset=utf-8');

if(isset($data["password"]) && $data["password"] == "KickPHP") {

	$sql = "SELECT * FROM Movies WHERE 1=1";
	$bind = [];

	if (!empty($data["nameSearch"])) {
		$sql .= "AND movieName = :movieName";
		$bind[":movieName"] = $data["nameSearch"];
	}

	$Movies = $db->sql($sql, $bind);
	header ("HTTP/1.1 200 OK");

	echo json_encode($Movies);

} else {
	header ("HTTP/1.1 401 Unauthorized");
	$error["errorMessage"] = "Dit kodeord var forkert";
	$error["error"] = 1;
	echo json_encode($error);
}
?>



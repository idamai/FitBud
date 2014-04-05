<?php
require_once ("../../system/settings.php");
require_once("../../system/db_login.php");

ini_set('max_execution_time', 600);
$OK = "ok";
$FAIL = "fail";
$ERROR = "error";
//preparation for further implementation
$LOGIN = "login";
$USER_TRAINEE = 0;
$USER_TRAINEE = 1;

$conn = dbconnect($dbconn);
$webInput = $_GET["data"];
if (!$webInput){
	$webInput = $_POST["data"];
}
$p = $webInput;
if (!$webInput){
	$webInput = $_GET["json_parameter"];
	if ($webInput)
		$p = json_decode($webInput, true);
}
if (!$webInput){
	$webInput = $_POST["json_parameter"];
	if ($webInput)
		$p = json_decode($webInput, true);
}


$retArr = array();
$retArr["_handle"] = $p["_handle"]; //An echo'd key that helps the api handler to uniquely reference requests

//debug purpose
$retArr["captured"] = $p;

// setup -------------------------------------------------

// -------------------------------------------------------

try{
	switch ($p["action"]){
		case "signUp":
			require_once("../../system/Model/User.php");
			require_once("../../system/Controller/SignUpController.php");
			signUpController = new SignUpController($conn);			
			$user = new User($p["user"]);
			$result = signUpController->addNewUser($user);
			$retArr["result"] = $result;
			$retArr["status"] = $OK;
			break;
		case "isEmailTaken":
			require_once("../../system/Model/User.php");
			require_once("../../system/Controller/SignUpController.php");
			signUpController = new SignUpController($conn);			
			$email = $p["email"];
			$result = signUpController->isEmailTaken($email);
			$retArr["result"] = $result;
			$retArr["status"] = $OK;
			break;
			break;
		default:
			$retArr["status"] = $OK;
			break;
	}
}catch(Exception $e){
	switch ($e->getMessage()){
	case $ERROR:
		$status = $e->getMessage();
		break;
	default:
		$status = $FAIL;
		break;
	}
	$retArr["status"] = $status;
	$retArr["debug"] = $e->getMessage();
	$retArr["stack"] = $e->getTraceAsString();
 }
dbclose($conn);
echo json_encode($retArr);

?>
<?PHP
include "eventCore.php";
$eventC=new eventCore();
if (isset($_POST["id_event"])){
	$eventC->supprimerevent($_POST["id_event"]);
	header('Location: starter.php');
}

?>
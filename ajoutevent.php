<?PHP
include "evenement.php";
include "eventCore.php";

if (isset($_POST['id_event']) and isset($_POST['id_prom']) and isset($_POST['nom_event']) and isset($_POST['theme']) and isset($_POST['date_event'])){
$event1=new event($_POST['id_event'],
$_POST['id_prom'],$_POST['nom_event'],
$_POST['theme'],$_POST['date_event']);
$event1C=new eventCore();
$event1C->ajouterevent($event1);
header('Location: starter.php');
	
}else{
	echo "vérifier les champs";
}

?>
<?PHP
include "promotioncore.php";
include "eventcore.php";
$promotionC=new promotioncore();
$eventC= new eventcore();
if (isset($_POST["id_prom"])){
	$eventC->supprimerevent1($_POST["id_prom"]);
	$promotionC->supprimerpromotion($_POST["id_prom"]);
	header('Location: starter2.php');
}

?>
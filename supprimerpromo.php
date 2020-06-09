<?PHP
include "promotioncore.php";
$promotionC=new promotioncore();
if (isset($_POST["id_prom"])){
	$eventC->supprimerpromotion($_POST["id_prom"]);
	header('Location: starter2.php');
}

?>
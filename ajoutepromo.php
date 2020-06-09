<?PHP
include "promotion.php";
include "promotioncore.php";

if ( isset($_POST['id_prom']) and isset($_POST['description'])){
$promotion1=new promotion($_POST['id_prom'],
$_POST['description']);
$promotion1C=new promotioncore();
$promotion1C->ajouterpromotion($promotion1);
header('Location: starter2.php');
	
}else{
	echo "vérifier les champs";
}

?>




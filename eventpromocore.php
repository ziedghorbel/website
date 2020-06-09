<?PHP
include 'C:\xampp\htdocs\siteweb\config.php';
class eventpromocore {
function afficherevents(){
		$sql="SElECT * From event inner join promotion on event.id_prom=promotion.id_prom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
}
  ?>
	
	
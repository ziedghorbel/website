<?PHP
include 'C:\xampp\htdocs\siteweb\config1.php';
class promotioncore {
function afficherpromotion ($promotion){

		echo "id_prom: ".$promotion->getid_prom()."<br>";
		echo "descrition: ".$promotion->getdescription()."<br>";
		
	}
	
	
	function ajouterpromotion($promotion){
		$sql="insert into promotion (id_prom,description) values (:id_prom,:description)";
		$db = config1::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_prom=$promotion->getid_prom();
        $description=$promotion->getdescription();
	
		$req->bindValue(':id_prom',$id_prom);
		$req->bindValue(':description',$description);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpromotions(){
		$sql="SElECT * From promotion";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpromotion($id_prom){
		$sql="DELETE FROM promotion where id_prom= :id_prom";
		$db = config1::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_prom',$id_prom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}


		function recupererpromotion($id_prom){
		$sql="SELECT * from promotion where id_prom=$id_prom";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifierpromotion($promotion,$id_prom){
		$sql="UPDATE promotion SET id_prom=:id_prom, description=:description WHERE id_prom=:id_prom";
		
		$db = config1::getConnexion();
try{		
        $req=$db->prepare($sql);

        $id_prom=$promotion->getid_prom();
        $description=$promotion->getdescription();
       
		$datas = array(':id_prom'=>$id_prom, ':id_prom'=>$id_prom,':description'=>$description);
		$req->bindValue(':description',$description);
		$req->bindValue(':id_prom',$id_prom);
	
			
           header('Location: starter2.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function rechercherpromotion($id_prom){
		$sql="SELECT * from promotion where id_prom=$id_prom";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function rechercherpromotionAvancer($id_prom){
		$sql="SELECT * from promotion where id_prom LIKE '".$id_prom."%'";
		$db = config1::getConnexion();
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
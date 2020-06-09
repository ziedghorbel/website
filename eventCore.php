<?PHP
include 'C:\xampp\htdocs\siteweb\config.php';
class eventCore {
function afficherevent ($event){
		echo "identifiant: ".$event->getid_event()."<br>";
		echo "Nom de l'event: ".$event->getnom_event()."<br>";
		echo "id_prom: ".$event->getid_prom()."<br>";
		echo "date: ".$event->getdate_event()."<br>";
		echo "theme: ".$event->gettheme()."<br>";
	}
	
	
	function ajouterevent($event){
		$sql="insert into event (id_event,id_prom,nom_event,theme,date_event) values (:id_event,:id_prom,:nom_event,:theme,:date_event)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_event=$event->getid_event();
        $id_prom=$event->getid_prom();
        $nom_event=$event->getnom_event();
        $theme=$event->gettheme();
        $date_event=$event->getdate_event();
		$req->bindValue(':id_event',$id_event);
		$req->bindValue(':id_prom',$id_prom);
		$req->bindValue(':nom_event',$nom_event);
		$req->bindValue(':theme',$theme);
		$req->bindValue(':date_event',$date_event);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherevents(){
		$sql="SElECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerevent($id_event){
		$sql="DELETE FROM event where id_event= :id_event";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_event',$id_event);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}


		function recupererevent($id_event){
		$sql="SELECT * from event where id_event=$id_event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifierevent($event,$id_event){
		$sql="UPDATE event SET id_event=:id_event, id_prom=:id_prom,nom_event=:nom_event,theme=:theme,date_event=:date_event WHERE id_event=:id_event";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$id_event=$event->getid_event();
        $id_prom=$event->getid_prom();
        $nom_event=$event->getnom_event();
        $theme=$event->gettheme();
        $date_event=$event->getdate_event();

		$datas = array(':id_event'=>$id_event, ':id_event'=>$id_event, ':id_prom'=>$id_prom,':nom_event'=>$nom_event,':theme'=>$theme,':date_event'=>$date_event);
		$req->bindValue(':id_event',$id_event);
		$req->bindValue(':id_prom',$id_prom);
		$req->bindValue(':nom_event',$nom_event);
		$req->bindValue(':theme',$theme);
		$req->bindValue(':date_event',$date_event);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function rechercherevent($id_event){
		$sql="SELECT * from event where id_event=$id_event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function recherchereventAvancer($id_event){
		$sql="SELECT * from event where id_event LIKE '".$id_event."%'";
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
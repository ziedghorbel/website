<?PHP
class event{
	protected $id_event;
	protected $nom_event;
	protected $id_prom; //FK
	protected $date_event;
	protected $theme;
	
	function __construct($id_event,$id_prom,$nom_event,$theme,$date_event){
		$this->id_event=$id_event;
        $this->id_prom=$id_prom;
        $this->nom_event=$nom_event;
        $this->date_event=$date_event;
        $this->theme=$theme;

	}
	function getid_event(){
		return $this->id_event;
	}
	function setid_event($id){
		$this->id_event=$id;
	}
	function getnom_event(){
		return $this->nom_event;
	}
	function setnom_event($nom){
		$this->nom_event=$nom;
	}
	function getid_prom(){
		return $this->id_prom;
	}
	function setid_prom($id_prom){
		$this->id_prom=$id_prom;
	}
    function getdate_event(){
		return $this->date_event;
	}
	function setdate_event($date){
		$this->date_event=$date;
	}
	function gettheme(){
		return $this->theme;
	}
	function settheme($theme){
		$this->theme=$theme;
	}	
}

?>
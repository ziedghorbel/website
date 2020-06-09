<?PHP
class promotion{
	
	protected $id_prom; //FK
	protected $description;
	
	
	function __construct($id_prom,$description){
	
        $this->id_prom=$id_prom;
        $this->description=$description;
        
	}
	function getdescription(){
		return $this->description;
	}
	function setdescription($description){
		$this->description=$description;
	}
	
	function getid_prom(){
		return $this->id_prom;
	}
	function setid_prom($id_prom){
		$this->id_prom=$id_prom;
	}
    
		
}

?>
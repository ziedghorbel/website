
<?PHP
class client{
	protected $id_client;
	protected $email_client;

	function __construct($id_client,$email_client,$password){
		$this->id_client=$id_client;
        $this->email_client=$email_client;
        $this->password=$password;

	}
	function getid_client(){
		return $this->id_client;
	}
	function setid_client($id){
		$this->id_client=$id;
	}
	function getemail_client(){
		return $this->email_client;
	}
	function setemail_client($email){
		$this->email_client=$email;
	}
	function getpassword(){
		return $this->password;
	}
	function setid_client($id){
		$this->password=$password;
	}
}
	?>

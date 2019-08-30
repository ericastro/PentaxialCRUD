<?php  
class ClassDBH
{
	public $connection;
	public $user;
	public $pass;
	public $data;
	public $host;
	public $dns;
	
	function __construct()
	{
		if( file_exists("config/database.ini") )
		{
			$config = parse_ini_file("config/database.ini");

			$this->user = isset($config['user']) ? $config['user'] : NULL;
			$this->pass = isset($config['pass']) ? $config['pass'] : NULL;
			$this->data = isset($config['data']) ? $config['data'] : NULL;
			$this->host = isset($config['host']) ? $config['host'] : NULL;
			$this->dns = "mysql:host=$this->host;dbname=$this->data";
		}
		else
		{
			throw new Exception("Arquivo config/database.ini não encontrado");
		}

		try 
		{
			$this->connection = new PDO($this->dns, $this->user, $this->pass);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			setlocale(LC_ALL, 'pt_BR'); 
		}
		catch (PDOException $e) 
		{
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
		return $this->connection;
	}
}

$OBJdbh = new ClassDBH();
foreach($OBJdbh->connection->query("select * from pessoas") as $item) 
{
	echo $item->name;
}
?>
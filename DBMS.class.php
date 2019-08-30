<?php  
class ADO
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
		catch (PDOException $exception) 
		{
		    print "Error!: " . $exception->getMessage() . "<br/>";
		    die();
		}
	}
}

class CRUD
{
	public $conn;

	function __construct()
	{
		$ADO = new ADO();
		$this->conn = $ADO->connection;
	}

	
	public function Create($table,$values)
	{
		$queryFields = str_replace(":","",implode(",",array_keys($values)));
		$queryValues = implode(",",array_keys($values));
		$sql = "INSERT INTO $table ($queryFields) VALUES ($queryValues)";
		try
		{
			$stmt = $this->conn->prepare($sql);
			foreach ($values as $key => $value) 
			{
				$stmt->bindParam($key,$value);
			}
			$stmt->execute();
			return $this->conn->lastInsertId();			
		}
		catch( Exception $Exception )
		{
			return $Exception->getMessage();
		}
	}


	public function Read($table,$where='',$order='',$fields='*')
	{
		if( !empty($table) and !empty($where))
		{
			$sql = "SELECT $fields FROM $table WHERE";
			$bindWhere = array();
			$signal = "";
			foreach ($where as $key => $value) 
			{
				if($key == "condition")
				{
					$sql .= " $value";
				}
				else if ( $key == "signal")
				{
					$signal = $value;
				}
				else
				{
					$key = str_replace(":", "", $key);
					$sql .= " $key $signal :$key";
					$key = ":" . $key;
					$bindWhere[$key] = $value;
				}
			}
			if(!empty($order))
			{
				$sql .= " ORDER BY $order";
			}

			try
			{
				$stmt = $this->conn->prepare($sql);
				$stmt->execute($bindWhere);
				return $stmt;
			}
			catch ( Exception $exception )
			{
				return $exception->getMessage();
			}

		}
		else if( !empty($table) )
		{
			try
			{
				$sql = "SELECT $fields FROM $table";
				if(!empty($order))
				{
					$sql .= " ORDER BY $order";
				}
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				return $stmt;
			}
			catch ( Exception $exception )
			{
				return $exception->getMessage();
			}
		}
	}

	public function ReadSpecial($sql)
	{
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt;
	}
}


$crud = new CRUD();
$table = "pessoas";

echo "<pre>";

$pessoas = $crud->Create($table,array(":nome" => "'Manuel Oliveira'"));
var_dump($pessoas);
$pessoas = $crud->Read($table,"","nome ASC");
if(is_object($pessoas))
{
	foreach ($pessoas as $pessoa) {
		echo "<p>" . $pessoa->idPessoa . " = " . $pessoa->nome . "</p>";
	}	
}
else
{
	echo "<hr>" . $pessoas . "<hr>";
}

$pessoas = $crud->ReadSpecial("SELECT * FROM pessoas");
var_dump($pessoas);
foreach ($pessoas as $pessoa) {
	echo "<p>" . $pessoa->idPessoa . " - " . $pessoa->nome . "</p>";
}
echo "</pre>";
?>
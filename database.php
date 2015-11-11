<?php
//include 'db_connection.php';


class Database{
    //Define all the needed database properties
    private static $_instance;//use the variable with out instanctiating the class
    private $conn;
	private $mysqli;
	
	private  $servername = 'fdb7.biz.nf';
	private	$user1 = '1990406_drive';
	private	$port = 3306;
	private	$password = "drivesafe123db";
	private	$db_name = '1990406_drive';
	
	//ensuring the Singleton class
	static function getInstance(){
	    /*Creates an instance of this object if none exists and returns it.*/
    	if(self::$_instance === null)
    	{
    	    self::$_instance = new Database();
    	}
    	    return self::$_instance;
	}

    //Defining all the Actions
    private function __construct(){
        try {
            //$conn->getInstance();
    	    //$conn = new PDO("mysql:host={self::$servername};dbname={self::$db_name", self::$user, self::$password);
    	    // set the PDO error mode to exception
    	    
    	    $this->mysqli = new mysqli('127.0.0.1', 'bigkbear', '', 'c9', 3306);
    	    //http://www.w3schools.com/php/php_mysql_update.asp
    	    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) 
        {
        	printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
    }
    
    function __destruct(){
        echo '<br>Closing database: ', $this->db_name;
        /* close connection */
        
        $this->mysqli->close();
    }
   
   //returns all rules to be displayed
   public function qry($sql){
    
    if ($result = $this->mysqli->query($sql)) 
    {
        $assoc = $result->fetch_all(MYSQLI_ASSOC);
        /* free result set */
        $result->free();
        return $assoc;
    }
   }
   
   //read from the db all the tips when driving in Barbados
   public function getAllTips(){
       $sql = 'Select * FROM users';
       
       $stmt = $conn->prepare($sql);
       $stmt->execute();
       
   }
}
?>
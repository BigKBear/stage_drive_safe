<?php
//include 'db_connection.php';


class Database{
    //Define all the needed database properties
    private static $_instance;//use the variable with out instanctiating the class
    private $conn;
	private $mysqli;
	
	private  $servername = '127.0.0.1';
	private	$user1 = 'bigkbear';
	private	$port = 3306;
	private	$password = "";
	private	$db_name = 'c9';
	
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
    	    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) 
        {
        	printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
    }
    
    private function __clone(){
        
    }
    
    function __destruct(){
        echo '<br>Closing database: ', $this->db_name;
        /* close connection */
        
        $this->mysqli->close();
    }
  
    //alows the creation of a new skill
    public function createSkill($skill_being_added){
        
    }
   
   //returns all skills to be displayed in pagination
   public function qry($sql){
       
   }
   
   //read a single user set of skill(s)
   public function getUserSkills($user_id){
       
   }
   
   /*TODO: Read a set of skills for aparticulat date of time
   EXAMPLE: start of september till end of September
   */
   public function getSkillsByDate($start_date,$end_date){
       
   }
   
    function SignIn() { 
        echo "hi";
        session_start(); 
        //starting the session for user profile page
        //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
        if(!empty($_POST['user'])){ 
            $query = mysql_query("SELECT * FROM user where firstname = '$_POST[user]' AND password = '$_POST[pass]'")
            or 
            die(mysql_error()); $row = mysql_fetch_array($query) 
            or 
            die(mysql_error());
            
            if(!empty($row['userName']) AND !empty($row['pass'])) 
            { 
                $_SESSION['userName'] = $row['pass']; 
                echo "hi";
            } 
            else { 
                    echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
            } 
        } 
    }
   
   public function updateSingleUserSkill($new_skill){
       
   }
   
   public function deleteSingleUserSkill(){
       
   }
}

?>
<?php
//$db = new mysqli('fdb7.biz.nf', '1990406_drive', 'drivesafe123db', '1990406_drive', 3306);
    define('DB_HOST', 'fdb7.biz.nf');
    define('DB_NAME', '1990406_drive');
    define('DB_USER','1990406_drive'); 
    define('DB_PASSWORD','drivesafe123db');
    define('DB_PORT',3306);
    
    $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_PORT) 
    or 
    die("Failed to connect to MySQL: " . mysql_error());
    
    $db=mysql_select_db(DB_NAME,$con) 
    or die("Failed to connect to MySQL: " . mysql_error());
    
    /* $ID = $_POST['user']; $Password = $_POST['pass']; */
    
    function SignIn() { 
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
                echo "<button><a href='home.php'></a>GO</button>";
            } 
            else { 
                    echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
            } 
        } 
    } 
    if(isset($_POST['submit'])) {
        SignIn(); 
    }
?>

Read more: http://mrbool.com/how-to-create-a-login-page-with-php-and-mysql/28656#ixzz3rF0YQBdg
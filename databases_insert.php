<?php
//1.Create a database connection
    $db_servername = '127.0.0.1';
    $db_user1 = 'bigkbear';
	$db_password = '';
	$db_name = 'c9';
	$db_port = 3306;
	$db = mysqli_connect($db_servername, $db_user1, '', $db_name, 3306);
	
	//Test if connection occured.
	if(mysqli_connect_errno()){
	    die("db connect failed: " .
	        mysqli_connect_error() .
	        "(" . mysqli_connect_errno() .")"
	    );
	}
	/*mysqli_query()
	mysqli_fetch
	
	//best to use 
	Working with retrieved data
	my sqli_fetch_row
	    -Results are in a standard array
	    -Keys are integers
	
	//best to use 
	mysqli_fetch_assoc
	    -Results are in an associative array
	    -Keys are column names
	   
	mysqli_fetch_array
	    -Results in either or both types of arrays
	    -MYSQL_NUM, MYSQL_ASSOC, MYSQL_BOTH
	*/
?>
<?php
    //2.Perform a query
    $query = "SELECT * ";
    
    //assemble a query
    $query .= "FROM users";
    
   // $query .= "WHERE role = 1";
    
    //$query .= "ORDER BY role ASC";
    
    $result = mysqli_query($db,$query);
    //test if there was an error
    if(!$result){
        die("db query FAIL.");
    }
    
?>
<html>
    <head>
        <title>Sign-In</title>
    </head>
    <body id="body-color">
        <?php
            //3.use returned data if any
            while($user = mysqli_fetch_assoc($result)){
                //output data for each row
                ?>
                <li><?php echo $user["role"];?></li>
                
                <!--
                echo $row['id']."<br>";
                echo $row['firstname']."<br>";
                echo $row['lastname']."<br>";
                echo $row['role']."<br>";
                echo "<hr >/";-->
                <?php
            }
        ?>
        <?php
            //4.Release the data
            mysqli_free_result($result);
        ?>
    </body>
</html> 



<?php
    //5.Close db connection
    mysqli_close($db);
?>
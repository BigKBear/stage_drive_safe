<?php
//1.Create a database connection
   $db_servername = '127.0.0.1';
    $db_user1 = 'bigkbear';
	$db_password = '';
	$db_name = 'c9';
	$db_port = 3306;
	$db = mysqli_connect($db_servername, $db_user1, '', $db_name, 3306);

/*
$db_servername = 'fdb7.biz.nf';
    $db_user1 = '1990406_drive';
	$db_password = 'drivesafe123db';
	$db_name = '1990406_drive';
	$db_port = 3306;
	$db = mysql_connect($db_servername, $db_user1, $db_password);
	mysql_select_db($db_name);*/
	$allow = '';
	
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
    //video 89 2;30
    
    $result = mysqli_query($db,$query);
    //test if there was an error
    if(!$result){
        die("db query FAIL.");
    }
    
?>
<html>
    <head>
        <title>Sign-In</title>
        <link rel="stylesheet" type="text/css" href="style-sign.css">
        <style type="text/css">
            /*#Sign-In{
                position: fixed;
                top: 50%;
                left: 50%;
                // bring your own prefixes 
                transform: translate(-50%, -50%);
            }*/
            h2{
                letter-spacing:10px;
                font-size:.2in;
                background-color:rgb(0,0,100);
                color:lightblue;
                text-transform: uppercase;
                width: 380px;
            }
            legend{
                font-variant:small-caps;
                font-family:bold;
                /*position:absolute;*/ 
                left:25%;
            }
            feildset{
                width:350px;
                font-family:Arial;
            }
            form{
                background-image: url(data:image/jpeg;base64,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);
                background-repeat:no-repeat;
                /*width:100%;
                height:100%;*/
            }
            label{
                position:relative;
                line-height:2;
            }
            .textinput {
                position:absolute;
                margin-left:20px;
                width:340px;
                left:20px;
            }
            span{color:red;}
        </style>
    </head>
    <body id="body-color">
        <div id="Sign-In" >
            <h2> Login Page</h2>
            <fieldset style="width:26%">
                <legend align="center">LOG-IN HERE</legend>
                <form name="login_form" method="POST" action="home.php">
                    <br>
                    <label class="textinput" for="user_name"><input  placeholder="Username" id="user_name" type="text" name="user" size="30"></label>
                    <br>
                    <br>
                    <label class="textinput" for="user_pass"><input placeholder="Password..." id="user_pass"type="password" name="pass" size="30"><span>*</span></label>
                    <br>
                    <br>
                    <input id="submit_button" type="submit" name="submit" value="Log-In"> 
                    <input id="signup_button" type="button" name="signup" value="Sign Up">
                    <!--<input href="/" id="forgot_button" type="url" name="forgot" value="Forgot Password">-->
                </form>
            </fieldset> 
             <?php
             if(isset($_POST['submit'])){
             
                //3.use returned data if any
                while($user = mysqli_fetch_assoc($result)){
                    //output data for each row
                    if($_POST['pass']==$user['password']){
                        $allow = 'true';
                    }
                }
                /*if($allow=='true'){
                    echo $post[user] . '<br>You are alowed to enter the by clicking <br> <a href="home.php">here</a>';
                }else{
                        echo '<br><br>Not a user';
                }*/
             }
             
            ?>
        </div>
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
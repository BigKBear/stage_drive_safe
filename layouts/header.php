<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: https://safedrive-bigkbear.c9users.io/');
    }
    $main_menu = array('Home','Admin','Logout');
?>
<html> 
    <head >
        <style>
            #feature_body{
                background-image: url(https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQnH5-nd36fWI9uXL6KI7PakwOPnNnTOrBcjSkf9jLkhi4YoWly);
                background-repeat:no-repeat;
                background-size: 100% 100%;
            }
        </style>
    <title>Drive Safe In Bim</title>
    </head>
    <body>
        <h2 id="feature_body">Welcome to Drive Safe</h2>
        <br>
        <div>
            <a href="home.php"><?php echo $main_menu[0];?></a> |
            <?php if($_SESSION["role"]==3){?><a href="home.php"><?php echo $main_menu[1];?></a> |<?php }?>
            <a href="index.php?logout=true"><?php echo $main_menu[2];?></a>
        </div>
        <?php
                if(isset($_GET['logout'])==true){
                    session_destroy();
                    header('Location: https://safedrive-bigkbear.c9users.io/');
                }
            
        ?>
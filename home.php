<?php
    session_start();
    require_once('app.php');
    //require_once('styles/images');
    include('layouts/header.php');
    $app = new Application($_POST);
?>
Welcome to drive Safe <?php echo $_SESSION['user']; print " ".$_COOKIE['user_user']?>
<br>
These are the rules on barbados roads: 
<br>
<ul>
    <?php
            for($i=0;$i < 13;$i++){
    ?>
    <li>
        <?php
            echo $app->getArrayFromRequest()[$i];
            //TODO::an array of images related to the current display tip item.
            ?><br> <br><img src='<?php echo $app->getArrayFromImage()[$i][0];?>'/>
              <img src='<?php echo $app->getArrayFromImage()[$i][1];?>'/><br>
    </li>
    <?php
            }
    ?>
</ul>
<?php
    include('layouts/footer.php');
?>
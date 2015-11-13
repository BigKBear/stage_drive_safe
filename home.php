<?php
    require_once('app.php');
    include('layouts/header.php');
    $app = new Application($_POST);
?>
Welcome to drive Safe
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
        }
        ?>
    </li>
</ul>
<?php
    include('layouts/footer.php');
?>
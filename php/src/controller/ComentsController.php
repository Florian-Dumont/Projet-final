<?php

//Si une insertion de message a été demandée avant le refresh:
if(isset($_POST['inputbox']) && !empty($_POST['inputbox']) && isset($_POST['buildId'])){
    $text = $_POST['inputbox'];
    $build_id=$_POST['buildId'];
    addNewMessage($text, $build_id, $db);
}

?>
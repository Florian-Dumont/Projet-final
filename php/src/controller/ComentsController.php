<?php
var_dump($_POST);
//Si une insertion de message a été demandée avant le refresh:
if(isset($_POST['comments']) && !empty($_POST['comments']) && isset($_POST['buildId'])){
    $text = $_POST['comments'];
    $build_id=$_POST['characterId'];
    $pagemanager = new PageManager();
    $pagemanager->addNewMessage($text, $build_id, $db);
}

?>
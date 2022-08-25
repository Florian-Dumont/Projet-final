<?php
require "../src/managers/Commentmanager.php";

$characterId=$_GET['characterId'];

$commentManager = new Commentmanager();


if(isset($_POST['comments'])){
      $commentManager->addNewMessage($_POST['comments'], $_SESSION['user']['id'], $_GET['characterId']);
}






// On récupère tous les messages du salon sélectionné en BDD
$messages=$commentManager->getCommentByCharacterId($characterId);



require '../page/display_message.phtml';
?>
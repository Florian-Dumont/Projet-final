<?php
require "../src/managers/Commentmanager.php";

$characterId=$_GET['characterId'];


$commentManager = new Commentmanager();
// On récupère tous les messages du salon sélectionné en BDD
$messages=$commentManager->getCommentByCharacterId($characterId);



require '../page/display_message.phtml';
?>
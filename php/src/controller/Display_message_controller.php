<?php
$build_id=$_GET['buildId'];
// On récupère tous les messages du salon sélectionné en BDD
$messages=getAllMessagesByBuildId($build_id, $db);
require './templates/display_messages.phtml';
?>
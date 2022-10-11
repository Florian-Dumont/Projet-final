<?php
// var_dump($_POST);
require "../src/managers/Commentmanager.php";



$commentManager = new Commentmanager();

// if(isset($_SESSION['key']) && $_SESSION['key'] != $_POST['token']){
//                         die (" Un probleme est survenue");
//                         }
if(isset($_POST['comments']) && trim($_POST['comments']) == ''){
        echo ("<p class='error'> Veuilliez remplir de champ commentaire </p>");
}else if(!isset($_POST['comments']) || !isset($_POST['token'])){
}else{
        if(isset($_SESSION['key2']) && $_SESSION['key2'] == $_POST['token']){
                $commentManager->addNewMessage($_POST['comments'], $_GET['characterId']);
                echo ("<p class='valide'> Le commentaire a bien été ajouté </p>");
        }else
        {
                echo ("<p class='error'> Un probleme est survenue </p>");
        }
}





// On récupère tous les messages du salon sélectionné en BDD
$messages=$commentManager->getCommentByCharacterId($_GET['characterId']);



require '../page/display_message.phtml';
?>
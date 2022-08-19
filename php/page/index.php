<!DOCTYPE html>
<html lang="fr">
<?php session_start();?>
<?php require "../classes/db_connect.php"?>
<?php require_once "./uploads/fileUploader.php";
/*try{
    // $pdo = new PDO("n'importe quoi !");
} catch(Exception $e){
    echo $e->getMessage();
}*/
?>

<?php 
    if(!empty($_POST)){
        
         require "../page/authentication.phtml"; 
    }
?>
<?php include "../layout/metadata.php" ?>
<?php $ddb = new Dbconnect(); ?>
    <body>
        
        <?php include "../layout/header.php" ?>
        <?php 
if(!(isset($_GET["route"]) && $_GET["route"] === "connexion")){
    include "../layout/navigation.php";
}
?>
        
        
        <?php
    require "../src/controller/RoutingController.php";
    
    $routing = new RoutingController();
    
    //Si une route a été définie dans l'url
    if(isset($_GET["route"]))
    {
        //on charge la page correspondante en envoyant toutes les infos en POST et GET
        $routing->matchRoute($_GET["route"], $_GET, $_POST);
    }
    else
    {
        //Sinon, on charge la page d'accueil par défaut
        $routing->matchRoute("homepage", $_GET);   
    }
    
?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>    
    <script type="text/javascript" src="../../JS/script.js"></script> 
    </body>
</html>
<?php

class AuthenticationController
{

    // function homepage() : void qui devra faire afficher le template homepage.phtml
    function homepage() : void
    {
        
        require '../page/homepage.phtml';
        
    }
    
    // function geo() : void qui devra faire afficher le template geo.phtml
    function geo() : void
    {
        require '../page/Geo.phtml'; 
    }
    function pyro() : void
    {
        require '../page/Pyro.phtml';
    }
    function anemo() : void
    {
        require '../page/Anemo.phtml';
    }
    function cryo() : void
    {
        require '../page/Cryo.phtml';
    }
    function electro() : void
    {
        require '../page/Electro.phtml';
    }
    function hydro() : void
    {
        require '../page/Hydro.phtml';
    }
    function connexion() : void
    {
        // require '../page/authentication.phtml';
        require '../page/form.php';
    }
    function build() : void
    {
        require '../page/Build.phtml';
    }
    function admin() : void
    {
        if($_SESSION['user']['is_admin']==1){ 
        require "../page/admin.phtml";
        } 
        else{
        echo "<h1 class='notfound'>Loupé , la page n'existe pas !</br> 
            <img src='../../ressources/Ganyu404.png' alt=' émoticone de ganyu troublé'></h1>";
        }
    }
    function adminUpdate() : void
    {
        if($_SESSION['user']['is_admin']==1){
            require '../page/adminUpdate.phtml';
        }
        else{
        echo "<h1 class='notfound'>Loupé , la page n'existe pas !</br> 
            <img src='../../ressources/Ganyu404.png' alt=' émoticone de ganyu troublé'></h1>";
        }
        
    }
    function adminUser() : void
    {
        if($_SESSION['user']['is_admin']==1){ 
        require "../page/adminUser.phtml";
        } 
        else{
        echo "<h1 class='notfound'>Loupé , la page n'existe pas !</br> 
            <img src='../../ressources/Ganyu404.png' alt=' émoticone de ganyu troublé'></h1>";
        }
    }

    
}
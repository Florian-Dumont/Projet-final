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

    
}
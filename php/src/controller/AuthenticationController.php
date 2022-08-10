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

    
}
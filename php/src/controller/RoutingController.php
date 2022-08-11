<?php

require "../src/controller/AuthenticationController.php";
require "../src/managers/PageManager.php";

class RoutingController
{
    private PageManager $pageManager;
    
    function __construct()
    {
        $this->pageManager = new PageManager();
    }
    
    private function sortRoute(string $route, array $get, array $post = null) : void
    {
        
           
        if($route === "homepage")
        {
            $authenticationController = new AuthenticationController();
             $authenticationController->homepage();
        }
        else if($route === "geo")
        {
            $authenticationController = new AuthenticationController();
            $authenticationController->geo($post);
        }
        else if($route === "pyro")
        {
                $authenticationController = new AuthenticationController();
                $authenticationController->pyro($post);
        }
        else if($route === "anemo")
        {
            $authenticationController = new AuthenticationController();
            $authenticationController->anemo($post);
        }
        else if($route === "cryo")
        {
            $authenticationController = new AuthenticationController();
            $authenticationController->cryo($post);
        }
        else if($route === "electro")
        {
            $authenticationController = new AuthenticationController();
            $authenticationController->electro($post);
        }
        else if($route === "hydro")
        {
            $authenticationController = new AuthenticationController();
            $authenticationController->hydro($post);
        }
        // création des page pyro ect
        else
        {
            echo "<h1>404 page not found</h1>";
        }
    }
    
    public function matchRoute(string $route = "homepage", array $get, array $post = null) : void
    {
        $existingRoutes = $this->pageManager->getAllPagesSlugs();
        
        $found = false;
        
        foreach($existingRoutes as $item)
        {
            if($route === $item["slug"])
            {
                $found = true;
                $this->sortRoute($route, $get, $post);
                break;
            }
        }
        
        if(!$found)
        {
            $this->sortRoute("404", $get);   
        }
    }
}
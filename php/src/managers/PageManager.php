<?php

require "../src/models/Page.php";

class PageManager
{
    private PDO $db;
    
    function __construct()
    {
        $user='floriandumont';
                        $pass='5beb219368b298ba060d732bab933890';
                        $this->db = new PDO('mysql:host=db.3wa.io;port=3306;dbname=floriandumont_teyvat', $user, $pass);
    }
    
    public function getAllPagesSlugs() : array
    {
        $query = $this->db->prepare('SELECT slug FROM pages ');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }
    
    public function getPageByslug(string $slug) : Page
    {
        $query = $this->db->prepare('SELECT * FROM pages WHERE pages.slug = :slug');
        $parameters = [
            'slug' => $slug
        ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        return new Page($result['id'], $result['slug'], $result['label']);
    }
}
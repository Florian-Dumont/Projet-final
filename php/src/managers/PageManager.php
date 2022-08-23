<?php

require "../src/models/Page.php";

class PageManager
{
    private PDO $db;
    
    function __construct()
    {
        
        $this->db = new PDO(
        'mysql:host=db.3wa.io;port=3306;dbname=floriandumont_teyvat;charset=UTF8',
        'floriandumont',
        '5beb219368b298ba060d732bab933890'
        );
        
        // $user='floriandumont';
        // $pass='5beb219368b298ba060d732bab933890';
        // $dsn = "mysql:dbname=floriandumont_teyvat;charset=UTF8;host=db.3wa.io;port=3306"; 
        // $this->db = new PDO($dsn, $user, $pass);
        
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
    //Fonction ramenant la liste de toutes les messages
    function getAllMessages($db) : ?array{
        $query = $db->prepare('SELECT text FROM comments');
        $query->execute();
        $messages = $query->fetchAll(PDO::FETCH_ASSOC);
        return $messages;
    }
    function getAllMessagesByBuildId(string $build_id, $db) : ?array{
        $query = $db->prepare('SELECT text FROM comments WHERE build_id=:build_id');
        $parameters = [
        'build_id' => $build_id
        ];
        $query->execute($parameters);
        $messages = $query->fetchAll(PDO::FETCH_ASSOC);
        return $messages;
    }
    //Fonction permettant de créer un nouveau message
    function addNewMessage(string $text, string $build_id, $db){
        //préparation des données à insérer dans la table message
        
        $author=$username;
        date_default_timezone_set('CET');
        $date_submitted = date('Y-m-d G:i:s');
    
    
        $query = $db->prepare("INSERT INTO comments (build_ID, text, user_ID, submited_date) VALUES (:build_id,:text,:author,:submited_date)");
        $parameters = [
        'build_id' => $characterId,
        'text' => $text,
        'author' => $author,
        'submited_date' => $date_submitted
        ];
        $query->execute($parameters);
    }
}
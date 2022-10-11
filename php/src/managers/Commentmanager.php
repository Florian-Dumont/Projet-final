<?php

class Commentmanager{
        
        public function getCommentByCharacterId (int $characterId) : ?array
        {
                $ddb =new Dbconnect();
                
                $sql = "SELECT comments.ID, comments.build_ID, comments.text, comments.user_ID, comments.submited_date FROM comments INNER JOIN builds ON builds.id=comments.build_ID
                WHERE builds.character_ID=:character_id ORDER BY comments.submited_date DESC";
                $query = $ddb->db->prepare($sql);
                $query->bindValue(":character_id", $characterId);
                $query->execute();
                
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                return $result;
        }
        public function getNameByUserId (int $user_ID) : ?array
        {
                 $ddb =new Dbconnect();
                 
                 $sql = "SELECT name FROM users WHERE ID=:user_ID";
                 $query = $ddb->db->prepare($sql);
                 $query->bindValue(":user_ID", $user_ID);
                 $query->execute();
                 
                 $result = $query->fetch(PDO::FETCH_ASSOC);
                 
                 
                 return $result;
     
        }
        public function getBuildIdByCharacterId (int $characterId) : ?array
        {
                $ddb = new Dbconnect();
                
                $sql = "SELECT ID FROM builds WHERE character_ID=:character_ID";
                $query = $ddb->db->prepare($sql);
                $query->bindValue(":character_ID", $characterId);
                $query->execute();
                
                $result = $query->fetch(PDO::FETCH_ASSOC);
                
                return $result;
        }
        
        public function addNewMessage(string $text, int $characterId){
        //préparation des données à insérer dans la table message
        
        
        date_default_timezone_set('CET');
        $date_submitted = date('Y-m-d G:i:s');
        $buildIdArray = $this->getBuildIdByCharacterId($characterId);
        
        
        $buildId = $buildIdArray['ID'];
        $ddb = new Dbconnect();
        $sql = "INSERT INTO comments (build_ID, text, user_ID, submited_date) VALUES (:build_id,:text,:author,:submited_date)";
        $query = $ddb->db->prepare($sql);
        $parameters = [
        'build_id' => $buildId,
        'text' => $text,
        'author' => $_SESSION['user']['id'],
        'submited_date' => $date_submitted
        ];
        $query->execute($parameters);
    }
}
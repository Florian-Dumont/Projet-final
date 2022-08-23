<?php

class Commentmanager{
        
        public function getCommentByCharacterId (int $characterId) : ?array
        {
                $ddb =new Dbconnect();
                
                $sql = "SELECT comments.ID, comments.build_ID, comments.text, comments.user_ID, comments.submited_date FROM comments JOIN builds ON builds.id=comments.build_ID
                WHERE builds.character_ID=:character_id";
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
}
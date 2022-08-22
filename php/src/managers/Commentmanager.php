<?php

class Commentmanager{
        
        public function getCommentByBuildId (int $buildId) : ?string
        {
                $ddb =new Dbconnect();
                
                $sql = "SELECT text FROM comments WHERE build_id=:build_id";
                $query = $ddb->db->prepare($sql);
                $query->bindValue(":build_id", $build_ID);
                $query->execute();
        }
}
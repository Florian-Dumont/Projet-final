<?php
class Usermanager{
        public function getAllNonAdminUsers() : ?array
        {
                $ddb = new Dbconnect();
                
                $sql = "SELECT * FROM users";
                $query = $ddb->db->prepare($sql);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
               
                return $result;
        }
        public function deleteUserById (int $userId) : void
        {
                $ddb = new Dbconnect();
                
                $sql = "DELETE FROM users WHERE id=:id";
                $query = $ddb->db->prepare($sql);
                $query->bindValue(":id", $userId);
                $query->execute();
        }
        
}
        



?>




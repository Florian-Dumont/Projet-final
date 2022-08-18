<?php

class CharacterManagers{
        
        public function getCharactersByCategoryId(int $categoryId) : ?array
        {
             $ddb = new Dbconnect();

        
        $sql = "SELECT ID,portrait_url, name, weapon_name, weapon_icon FROM characters WHERE category_id=:category_id";

        $query = $ddb->db->prepare($sql);
        $query->bindValue(":category_id", $categoryId);
        $query->execute();
                        
        $characters = $query->fetchAll(PDO::FETCH_ASSOC);
        

        return $characters;   
                
                
        }
}

        
?>

<?php
        
        // echo "<img class='build_layout' src=".$image['image_url'].">"; 
class Buildmanager{
        
    public function getBuildByCharacterId(int $characterId) : ?string
    {
        $ddb = new Dbconnect();

        $sql = "SELECT image_url FROM builds WHERE  character_id=:character_id";

        $query = $ddb->db->prepare($sql);
        $query->bindValue(":character_id", $characterId);
        $query->execute();
                        
        $image = $query->fetch(PDO::FETCH_ASSOC);
        $imageUrl = $image['image_url'];
        
        return $imageUrl;
    }    
}      


?>

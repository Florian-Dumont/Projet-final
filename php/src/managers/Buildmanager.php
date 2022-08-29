
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
        var_dump($image);
    }
    public function getAllBuild
    {
        $ddb = new Dbconnect();
        
        $sql = "SELECT ID FROM builds";
        
        $query = $ddb->db=>prepare($sql);
        
        $query->execute();
        
        $build = $query->fetchAll(PDO::FETCH_ASSOC);
        $buils = $build['image_url'];
    }
    
    public function editbuildBycCharacterId(int $characterId) : ?string
    {
        $ddb = new Dbconnect();
        
        $sql ="UPDATE image_url FROM builds Where character_id=:character_id";
        
        $query = $ddb->db->prepare($sql);
        $query->bindvalue(":character_id", $characterId);
        $query->execute();
        
        $image = $query->fetch(PDO::FETCH_ASSOC);
        $imageUrl = $image['image_url'];
        
        return $imageurl;
        
    }
}      


?>

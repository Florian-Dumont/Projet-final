
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
    public function getAllBuilds() : ?array
    {
        $ddb = new Dbconnect();
        
        $sql = "SELECT ID, image_URL FROM builds";
        
        $query = $ddb->db->prepare($sql);
        
        $query->execute();
        
        $builds = $query->fetchAll(PDO::FETCH_ASSOC);
        
        
        var_dump($builds);
        
        return $builds;
    }
    
    public function editBuildByBuildId(int $buildId) : ?string
    {
        $ddb = new Dbconnect();
        
        $sql ="UPDATE image_url FROM builds Where build_id=:build_id";
        
        $query = $ddb->db->prepare($sql);
        $query->bindvalue(":build_id", $buildId);
        $query->execute();
        
        $image = $query->fetch(PDO::FETCH_ASSOC);
        $imageUrl = $image['image_url'];
        
        return $imageurl;
        
    }
}      


?>

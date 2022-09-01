
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
    public function getAllBuilds() : ?array
    {
        $ddb = new Dbconnect();
        
        $sql = "SELECT ID, image_URL FROM builds";
        
        $query = $ddb->db->prepare($sql);
        
        $query->execute();
        
        $builds = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $builds;
    }
    
    public function editBuildByBuildId(int $buildId, string $image_url) : void
    {
        $ddb = new Dbconnect();
        
        $sql ="UPDATE builds SET image_URL=:image_url Where ID=:build_id";
        
        $query = $ddb->db->prepare($sql);
        $query->bindValue(":image_url", $image_url);
        $query->bindValue(":build_id", $buildId);
        $query->execute();
        
        
        
        
        
        
        // return $imageurl;
        
    }
}      


?>

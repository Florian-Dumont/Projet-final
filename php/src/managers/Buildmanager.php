<?php

        $ddb = new Dbconnect();

        $character_id = $_GET["characterId"];
        $categorie_id = $_GET["categoryId"];

        $sql = "SELECT image_url FROM builds WHERE category_id=:category_id AND character_id=:character_id";

        $query = $ddb->db->prepare($sql);
        $query->bindValue(":category_id", $category_id);
        $query->bindValue(":character_id", $character_id);
        $query->execute();
                        
        $image = $query->fetch(PDO::FETCH_ASSOC);

?>
        <img class="build_layout" src=<?=$image['image_url']?>>
<?php
        
        // echo "<img class='build_layout' src=".$image['image_url'].">"; 
        


?>
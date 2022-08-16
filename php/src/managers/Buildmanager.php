<?php

        $character_id = $_GET["characterId"];

        $sql = "SELECT image_url FROM builds WHERE character_id=:character_id";

        $query = $ddb->db->prepare($sql);
        $query->bindValue(":character_id", $character_id);
        $query->execute();
                        
        $image = $query->fetch();
        
        echo $image;
        var_dump($image);


?>
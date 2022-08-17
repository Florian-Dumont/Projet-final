<?php

        $ddb = new Dbconnect();

        $category_id = $_GET["categoryId"];
        

        $sql = "SELECT portrait_url FROM characters WHERE category_id=:category_id";

        $query = $ddb->db->prepare($sql);
        $query->bindValue(":category_id", $category_id);
        $query->execute();
                        
        $image = $query->fetchAll(PDO::FETCH_ASSOC);
        var_dump($image);
?>
        <img class="build_layout" src=<?=$image['portrait_url']?>>
<?php
        
        // echo "<img class='build_layout' src=".$image['image_url'].">"; 
        


?>
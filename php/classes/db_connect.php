
<?php

    
class Dbconnect{
        
        public function __construct(){
                try{
                        $user='floriandumont';
                        $pass='5beb219368b298ba060d732bab933890';
                        $this->db = new PDO('mysql:host=db.3wa.io;port=3306;dbname=floriandumont_teyvat', $user, $pass);
                        
                }catch (PDOException $e){
                        print"Erreur ! :" . $e ->getMessage() ."<br/>";
                        die();
                }
        }
}

?>

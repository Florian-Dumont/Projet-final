<?php

class AdminPanelController
{

        public function manageUser(array $get, array $post = null)
        {
                    if(isset($_SESSION) && $_SESSION['user']['is_admin']==1)
                    {
                        echo "Admin connecté !";
                        // If the admin came from a form, it means that he wanted to delete a user
                        if(!empty($_POST)){
                            $delUserId=$_POST['userId'];
                            $userManager= new UserManager();
                            $userManager->deleteUserById($delUserId);
                        }
                        
                      
                        require "./php/page/adminUser.phtml";
                    }
                    else{
                    echo "Non Admin connecté !";
                    require "./php/page/homepage.phtml";
                    }
                    
        }
}    
?>
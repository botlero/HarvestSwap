<?php
           
            
            $insertUserSql =  "insert into gardener(gardener_user_name,email,gardener_password,first_name,last_name,gardener_address,gardener_bio,gardener_image) values('".
                    $gardener_user_name."','".$email."','".$gardener_password."','".$first_name."','".$last_name."','".$gardener_address."','".$gardener_bio."','".$gardener_image."')";

            $usernameCheckSQl =  "select gardener_user_name from gardener Where gardener_user_name='".$gardener_user_name."'";

            $loginCheckSql =  "select gardener_user_name from gardener Where gardener_user_name='".$gardener_user_name."' and gardener_password='" .$gardener_password."'";

                   
               
        
      
?>
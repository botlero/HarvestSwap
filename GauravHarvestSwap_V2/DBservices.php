<?php
           
            
            $insertUserSql =  "insert into user(username,email,password,First_name,Last_name,location,bio) values('".
                    $Username."','".$email."','".$password."','".$firstname."','".$lastname."','".$location."','".$bio."')";


            $loginCheckSql =  "select username from User Where username='".$Username."' and password='" .$password."'";

                   
               
        
      
?>
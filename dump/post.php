<?php

class Post{

    private $error = "";

    public function get_samplengos($GID)
    {
        $query = "SELECT * from samplengos where Orgname = '$GID' order by GID desc limit 9";
    
        $DB = new Database();
        $result = $DB->read($query);
    
        if($result)
        {
            return $result;
        
        }else
        {
           return false; 
        }
    } 
}
?>
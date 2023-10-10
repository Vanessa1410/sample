<?php

class Database
{
    private $host = "localhost";
    private $username = "root"; 
    private $password = "";
    private $db = "cc";

    function connect()
    {
        $connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);
        return $connection;
    }

    function getsamplengos()
    {
        $query = "SELECT Orgname, City, Description, Contact FROM Samplengos";

        $conn = $this->connect();
        $result = mysqli_query($conn, $query);

        if(!$result)
        {
            return false;
        }
        else
        {
            $data = false;
            while($row = mysqli_fetch_assoc($result))
            {
                $data[] = $row;
            }
            return $data;
        }
    }

    function read($query)
    {
        $conn = $this->connect();
        $result = mysqli_query($conn,$query);

        if(!$result)
        {
            return false;
        }
        else
        {
            $data = false;
            while($row = mysqli_fetch_assoc($result))
            {
                $data[] = $row;
            
            }
            return $data;
        }
    }

    function save($query)
    {
        $conn = $this->connect();
        $result = mysqli_query($conn,$query);

        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}




// $DB = new Database();
    // $Firstname= "van";
// $Lastname= "bleh";

// $query = "insert into volprofile (Firstname,Lastname) values ('$Firstname','$Lastname')";

// mysqli_query($connection,$query);

?>
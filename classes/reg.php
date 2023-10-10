<?php

class reg
{
    private $error = "";
    public function evaluate($data)
    {
        foreach($data as $key => $value)
        {
            #code
            if(empty($value))
            {
                // $error .
                $this->error = $this->error . $key . " is empty!<br>";
            }
        }

        if($this->error == "")
        {
            //no error
             return $this->create_user($data);
            // echo "<pre>";
            // print_r($data);
            // echo "<pre>";
            // return "inside create_user";
        }
        else
        {
            return $this->error;
        }
    }


    public function create_user($data)
    {
        // $Firstname = "";
        // $Lastname = "";
        // $Gender = "";
        // $Age = 0;
        // $City = "";
        // $Email = "";
        // $Username = "";
        // $Password = "";
        // $result = "";
        // return "start";
        if(isset($_POST['submit']))
        {
            $Firstname = $data['Firstname'];
            $Lastname = $data['Lastname'];
            $Gender = $data['Gender'];
            $Age = $data['Age'];
            $City = $data['City'];
            $Email = $data['Email'];
            $Username = $data['Username'];
            $Password = $data['Password'];
       
        
        //create these                        "." strtolower($Lastname)
            $Urladdress = strtolower($Firstname) . "." . strtolower($Lastname);
            $VolID = $this->create_VolID();


        // return "before query";

        $query = "INSERT into volprofile 
        (VolID,Firstname,Lastname,Gender,Age,City,Email,Username,Password,Urladdress) 
        VALUES
        (?,?,?,?,?,?,?,?,?,?)";

// ('$VolID','$Firstname', '$Lastname','$Gender','$Age','$City','$Email','$Username','$Password','$Urladdress')";
        
        
        // return "after query";
        // return $query;
        // return $data;
        // return $query;

        $DB = new Database();

        $conn = $DB->connect();
        if ($stmt = $conn->prepare($query)) {
            
            $stmt->bind_param("isssisssss",$VolID, $Firstname, $Lastname, $Gender, $Age, $City, $Email, $Username, $Password, $Urladdress);


            if ($stmt->execute()) {
                $stmt->close();
                echo "<script>resetForm();</script>";
                return "User created successfully!";
               
            } else {
                $stmt->close();
                return "Error: " . $conn->error;
            }
        } else {
            return "Error: " . $conn->error;
        }

        // $DB->save($query);
        
        }
    return "user creation failed";

        
    }

    // private function create_url()
    // {

    // }

    /**
     * Summary of create_VolID
     *
     */
     function create_VolID()
    {
         $length = rand(4,19);
         $number = "";
         for($i=0;$i< $length; $i++){
            #code...
            $new_rand = rand(0,9);

            $number = $number . $new_rand;
         }

         return $number;
    }
}

// $data =
// [
//     $Firstname = "";
//     $Lastname = "";
//     $Gender = "";
//     $Age = 0;
//     $City = "";
//     $Email = "";
//     $Username = "";
//     $Password = "";
//     $result = "";
// ]



<?php
session_start();
// var_dump($_SESSION);

// include("classes/connect.php");
// include("classes/post.php");
//     //Profiles
        $post = new Post();
//         if (isset($yourArray['cc_Orgname'])) {
//             // Access the value safely
//             $orgName = $yourArray['cc_Orgname'];
//         } else {
//             // Handle the case where the key doesn't exist
//             $orgName = "Key not found";
//         }
//         $_SESSION['cc_Orgname'] = $orgName;
        $samplengos = $post->get_samplengos($orgName);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        background-color: #57B894;
        }
        
        img{
            height:200px;
            width:100%;
        }
        
        div [class^="col-"]{
            /* margin-left: 10px; */
            
            padding-left:5px;
            padding-right:5px;
            border: 5%;
            float:left;
            width: 27%;
            /* padding: 0 10px; */
        }

        .card{
            transition:0.5s;
            cursor:pointer;

        }
        .card-title{  
            font-size:15px;
            transition:1s;
            cursor:pointer;
        }
        .card-title i{  
            font-size:15px;
            transition:1s;
            cursor:pointer;
            color:#ffa710
        }
        .card-title i:hover{
            transform: scale(1.25) rotate(100deg); 
            color:#18d4ca;
            
        }
        .card:hover{
            transform: scale(1.05);
            box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
        }
        .card-text{
            height:80px;  
        }
        
        .card::before, .card::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: scale3d(0, 0, 1);
            transition: transform .3s ease-out 0s;
            background: rgba(255, 255, 255, 0.1);
            content: '';
            pointer-events: none;
        }
        .card::before {
            transform-origin: left top;
        }
        .card::after {
            transform-origin: right bottom;
        }
        .card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
            transform: scale3d(1, 1, 1);
  }
    </style>
    <!-- <link rel="stylesheet" href="E:\xampp\htdocs\CC\cardhover.css"> -->
    <script src="https://kit.fontawesome.com/87eb476f03.js" crossorigin="anonymous"></script>
</head>


<body>
    <div class="container mt-2" style="padding-left: 16%;">
          <div class="card card-block mb-2">
            <h4 class="card-title">Card 1</h4>
            <p class="card-text">Welcom to bootstrap card styles</p>
            <a href="#" class="btn btn-primary">Submit</a>
          </div>  
          <div class="row">
            
          <?php
          if($samplengos){
            foreach ($samplengos as $row) {
                # code...
                include("post.php");
            }
          }
     
            ?>
            
          </div>
          
        </div>
        
</body>
</html>

 
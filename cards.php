<?php
include("classes/connect.php");

$DB = new Database();
$samplengos = $DB->getsamplengos();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cardhover.css">
    <script src="https://kit.fontawesome.com/87eb476f03.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-2" style="padding-left: 16%;">
        <div class="row">
            <?php
            if($samplengos){
                foreach ($samplengos as $row) {
                    echo '<div class="col-md-3 col-sm-6">
                            <div class="card card-block">
                                <h4 class="card-title text-right"><i class="material-icons">' . $row['Orgname'] . '</i></h4>
                                <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
                                <h5 class="card-title mt-3 mb-3">' . $row['City'] . '</h5>
                                <p class="card-text">' . $row['Description'] . '</p>
                                <p class="card-text">' . $row['Contact'] . '</p>
                            </div>
                        </div>';
                }
            }
            ?>
          </div> 
    </div>
</body>
</html>

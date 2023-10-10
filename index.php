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
    <title>Community Connect</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://kit.fontawesome.com/87eb476f03.js" crossorigin="anonymous"></script>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'poppins', 'sans-serif';
    box-sizing: border-box;
    }

    body{
        background-color: white;
        /* background: #57B894; */
        color: #5f5f5f;
    }

    a{
        text-decoration: none;
        color: #5f5f5f;
    }

    .navbar{
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #fff;
    padding: 6px 6%;
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1); 
    }

/* .logo img{
    width: 30px;
    margin-right: 15px;
    display: block;
} */

    .navbar-center ul li{
        display: inline-block;
        list-style: none;

    }

    .navbar-center ul li a{
        display: flex;
        align-items: center;
        font-size: 14px;
        margin: 5px 8px;
        padding-right: 5px;
        position: relative;
    }

    .navbar-center ul li a i{
        width: 30px; 
    }

    .navbar-center ul li a::after{
        content: '';
        width: 0;
        height: 2px;
        background: #57B894;
        position: absolute;
        bottom: -13px;
        transition: width 0.3s ;
    }

    .navbar-center ul li a:hover::after,
    .navbar-center ul li a.active-link::after
    {
        width: 100%;
    }

    .nav-profile-img{
        width: 40px;
        border-radius: 50%;
        display: block;
        cursor: pointer;
        position: relative;
    }

    .online{
        position: relative ;
    }

    .online::after{
        content: '';
        width: 7px;
        height: 7px;
        border: 2px solid #fff;
        border-radius: 50%;
        right: 0px;
        top: 0px;
        background: #41db51;
        position: absolute;
    }

    .search-box{
        background: #f0f2f5;
        width: 250px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        padding: 0 15px;
    }

    .navbar-left{
        display: flex;
        align-items: center;
    }

    .search-box i{
        width: 14px;
    }

    .search-box input{
        width: 100%;
        background: transparent;
        padding: 8px;
        outline: none;
        border: 0;
    }

    /* -----navbar ends----- */

    .back-img{
        background: url('https://rajivgandhingo.files.wordpress.com/2017/12/about-us-bal-utsav-bangalore-india.jpg') no-repeat;
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        position: relative;
        background-repeat: no-repeat;
    }
    
    .back-img::before{
        content: '';
        position: absolute;
        height: 100%;
        width: 100%;
        /* background: rgba(0, 0, 0, 0.4 ); */
        opacity: 0.2;
    }
    
  img{
    height:200px;
    width:100%;
     }
  
  div [class^="col-"]{
    /* margin-left: 10px; */
    position:static;
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
<body>
    
    <nav class="navbar">
        <div class="navbar-left">
            <!-- <a href="index.html" class="logo"><img src=""></a> -->
        
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
            </div>
        
        </div>
        <div class="navbar-center">
            <ul>
                <li><a href="#" class="active-link"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
                <li><a href="#"><i class="fa-solid fa-user"></i><span>Profile</span></a></li>
                <li><a href="#"><i class="fa-solid fa-message"></i><span>Forum</span></a></li>
                <li><a href="#"><i class="fa-solid fa-user-group"></i><span>About us</span></a></li>
                <li><a href="#"><i class="fa-solid fa-globe"></i><span>Contact us</span></a></li>
                <!-- <li><a href="#"><img src="images/"><span>Home</span></a></li> -->

            </ul>
        </div>
        <!-- <div class="navbar-right">
            <div class="online">
                <img src="images/user-1.png" class="nav-profile-img">
            </div>
           
        </div> -->
    </nav>

<!-- -----navbar close----- -->
    <section>
        <div class="back-img"></div>
    </section>

    <!-- <main> -->
    <section id="events">
                
                <h2>Upcoming Events</h2>
        
                <div class="event-list">
                    <!-- Events will be dynamically added here -->
                </div>
            </section>
        </section>

        <section>
            <!-- Shared posts will be dynamically added here -->
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
        </section>
        
    <!-- </main> -->



</body>
</html>
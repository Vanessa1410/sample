<?php
include("classes/connect.php");

$DB = new Database();
$samplengos = $DB->getsamplengos();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Community Connect</title>
    <link rel="stylesheet" href="homepage.css">
    <!-- <link rel="stylesheet" href="style(1).css">  -->
    <link rel="stylesheet" href="cardhover.css">
    <link rel="stylesheet" href="evo-calendar.min.css">
    <link rel="stylesheet" href="evo-calendar.midnight-blue.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <script src="https://kit.fontawesome.com/87eb476f03.js" crossorigin="anonymous"></script>


    <style>
        *{
            margin: 100;
            padding:  0;
            font-family: 'Roboto', sans-serif;
        }
        .hero{
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg,#6ac1c5,#bda5ff);
            position: relative;
        }
        .calendar {
            width: 80%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }

        *{
    margin: 0;
    padding: 0;
    font-family: 'poppins', 'sans-serif';
    box-sizing: border-box;
}

body{
    background-color: #f0f2f5;
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
    background: #045be6;
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
    </style>

</head>
<body>
    
    <nav class="navbar">
        <div class="navbar-left">
            <a href="homepage.php" class="logo"><img src=""></a>
        
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

    <main>
        <!-- <section id="new-post">
            <div class="post-box">
                <h2>Create a New Post</h2>
                <textarea id="post-content" placeholder="Share your thoughts..."></textarea>

                <div >
                <button id="add-button"><b>Add photo</b></button>
                </div>

                <br>
                <button id="post-button">Post</button>
           
                
            </div> -->

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
        

        <!-- <section>
            <div class="hero"> 
        
                <div id="calendar"></div>
        
            </div> 
            </section> -->
    </main>
    
    <script src="script.js"></script>

    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js">

    </script>

    <script src="evo-calendar.min.js"> </script>
    <script> 
        $(document).ready(function() {
    $('#calendar').evoCalendar({ 
        theme:"Midnight Blue",
        calendarEvents: [
      {
        id: 'event1', // Event's ID (required)
        name: "New Year", // Event name (required)
        date: "January/1/2020", // Event date (required)
        description:"the heart felt greeting.",
        type:"holiday", // Event type (required)
        everyYear: true // Same event every year (optional)
      },
      {
        name: "Vacation Leave",
        badge: "02/13 - 02/15", // Event badge (optional)
        date: ["February/13/2020", "February/15/2020"], // Date range
        description: "Vacation leave for 3 days.", // Event description (optional)
        type: "event",
        color: "#63d867" // Event custom color (optional)
      }
    ]
  });
      
    })


    </script>
    </section>
    <!-- <footer>
        <p>&copy; 2023 Community Connect</p>
    </footer> -->
   
</body>
</html>


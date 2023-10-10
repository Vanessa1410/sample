<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="aboutus.css">

    <script src="https://kit.fontawesome.com/87eb476f03.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
  html {
    height: 100%;
  }
  
  body {
    overflow: hidden;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    background:  #6FD0AC  url("../img/bg.jpg") no-repeat center center fixed;
    /* #bcdee7 */
    background-size: cover;
    position: fixed;
    padding: 0px;
    margin: 0px;
    width: 100%;
    height: 100%;
    font: normal 14px/1.618em "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
  }
  
  body:before {
    content: "";
    height: 0px;
    padding: 0px;
    border: 130em solid white;   
    /* #313440 */
    /* #57B894 */
    position: absolute;
    left: 50%;
    top: 100%;
    z-index: 2;
    display: block;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-animation: puff 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
    animation: puff 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
  }
  
  h1,
  h2 {
    font-weight: 500;
    margin: 0px 0px 5px 0px;
  }
  
  h1 {
    font-size: 24px;
  }
  
  h2 {
    font-size: 16px;
  }
  
  p {
    margin: 0px;
  }

.team{
    font-size: 38px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: white;
    border-color: #57B894;
    padding: 15px 0px 0px 80px;
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
  
  .profile-container {
    display: flex;
    justify-content:space-between ;
    padding: 80px;
  }
  
 

  .profile-card1 {
    background:  #57B894;
    /* #FFB300 */
    width: 56px;
    height: 56px;
    position: fixed;
    left: 50%;
     /* top: 10%; */
    bottom: 20px;
    z-index: 2;
    overflow: hidden;
    opacity: 0;
    margin-top: 70px;
    -webkit-transform: translate(-50%);
    transform: translate(-50%,-36%);
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -webkit-box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
    -webkit-animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
    animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
  }
  
   /* Styles for individual profile cards */
   .profile-card2 {
    background: #57B894;
    width: 56px; /* Adjust the width as needed */
    height: 56px; /* Adjust the height as needed */
    position: relative;
    top: 10%;
    left:10%;
    bottom: 10%;
    overflow: hidden;
    transform: translate(0,-13% );
    margin-top: 70px;
    border-radius: 50%;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
    animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
    animation-delay: 0s, 0.6s, 1.2s, 1.8s; /* Adjust the delays for each card */
    opacity: 0;
    text-align: center;
  }

  .profile-card3 {
    background: #57B894;
    width: 56px; /* Adjust the width as needed */
    height: 56px; /* Adjust the height as needed */
    position: relative;
    overflow: hidden;
    transform: translate(0,-13% );
    right:10%;
    margin-top: 70px;
    border-radius: 50%;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
    animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
    animation-delay: 0s, 0.6s, 1.2s, 1.8s; /* Adjust the delays for each card */
    opacity: 0;
    text-align: center;
  }

  .profile-card1 header {
    width: 240px;
    height: 220px;
    padding: 40px 20px 30px 20px;
    display: inline-block;
    float: left;
    border-right: 2px dashed #EEEEEE;
    background: #FFFFFF;
    color: #000000;
    margin-top: 50px;
    opacity: 0;
    text-align: center;
    -webkit-animation: moveIn 1s 3.1s ease forwards;
    animation: moveIn 1s 3.1s ease forwards;
  }
  
  .profile-card1 header h1 {
    color: #57B894;
  }
  
  .profile-card1 header a {
    display: inline-block;
    text-align: center;
    position: relative;
    margin: 25px 30px;
  }
  
  .profile-card1 header a:after {
    position: absolute;
    /* content: ""; */
    bottom: 3px;
    right: 3px;
    width: 20px;
    height: 20px;
    border: 4px solid #FFFFFF;
    -webkit-transform: scale(0);
    transform: scale(0);
    background: -webkit-linear-gradient(top, #2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%);
    background: linear-gradient(#2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%);
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    -webkit-animation: scaleIn 0.3s 3.5s ease forwards;
    animation: scaleIn 0.3s 3.5s ease forwards;
  }
  
  .profile-card2 header {
    width: 240px;
    height: 220px;
    padding: 40px 20px 30px 20px;
    display: inline-block;
    float: left;
    border-right: 2px dashed #EEEEEE;
    background: #FFFFFF;
    color: #000000;
    margin-top: 50px;
    opacity: 0;
    text-align: center;
    -webkit-animation: moveIn 1s 3.1s ease forwards;
    animation: moveIn 1s 3.1s ease forwards;
  }
  
  .profile-card2 header h1 {
    color: #57B894;
  }
  
  .profile-card2 header a {
    display: inline-block;
    text-align: center;
    position: relative;
    margin: 25px 30px;
  }
  
  .profile-card2 header a:after {
    position: absolute;
    /* content: ""; */
    bottom: 3px;
    right: 3px;
    width: 20px;
    height: 20px;
    border: 4px solid #FFFFFF;
    -webkit-transform: scale(0);
    transform: scale(0);
    background: -webkit-linear-gradient(top, #2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%);
    background: linear-gradient(#2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%);
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    -webkit-animation: scaleIn 0.3s 3.5s ease forwards;
    animation: scaleIn 0.3s 3.5s ease forwards;
  }

  .profile-card3 header {
    width: 240px;
    height: 220px;
    padding: 40px 20px 30px 20px;
    display: inline-block;
    float: left;
    border-right: 2px dashed #EEEEEE;
    background: #FFFFFF;
    color: #000000;
    margin-top: 50px;
    opacity: 0;
    text-align: center;
    -webkit-animation: moveIn 1s 3.1s ease forwards;
    animation: moveIn 1s 3.1s ease forwards;
  }
  
  .profile-card3 header h1 {
    color: #57B894;
  }
  
  .profile-card3 header a {
    display: inline-block;
    text-align: center;
    position: relative;
    margin: 25px 30px;
  }
  
  .profile-card3 header a:after {
    position: absolute;
    /* content: ""; */
    bottom: 3px;
    right: 3px;
    width: 20px;
    height: 20px;
    border: 4px solid #FFFFFF;
    -webkit-transform: scale(0);
    transform: scale(0);
    background: -webkit-linear-gradient(top, #2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%);
    background: linear-gradient(#2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%);
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    -webkit-animation: scaleIn 0.3s 3.5s ease forwards;
    animation: scaleIn 0.3s 3.5s ease forwards;
  }


  /* .avatar-holder {
    position: absolute;
    margin: auto;
    top: 40px;
    right: 0;
    left: 0;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    box-shadow: 0 0 0 5px #151515,
                inset 0 0 0 5px #000000,
                inset 0 0 0 5px #000000,
                inset 0 0 0 5px #000000,
                inset 0 0 0 5px #000000,;
    background: white;
    overflow: hidden;
    animation: mvTop 1.5s;
    img{
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  } */
  .profile-card1 header a > img {
    width: 172px;
    max-width: 100%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -webkit-transition: -webkit-box-shadow 0.3s ease;
    transition: box-shadow 0.3s ease;
    -webkit-box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
    box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
  }
  
  .profile-card1 header a:hover > img {
    -webkit-box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
  }
  
  .profile-card1 .profile-bio {
    width: 175px;
    /* height: 180px; */
    display: inline-block;
    float: right;
    padding: 10px 54px 20px 28px;
    background: #FFFFFF;
    color: #333333;
    margin-top: 50px;
    text-align: center;
    opacity: 0;
    -webkit-animation: moveIn 1s 3.1s ease forwards;
    animation: moveIn 1s 3.1s ease forwards;
  }
  
  /* .profile-card1 */
   .profile-social-links {
    width: 218px;
    display: inline-block;
    float: right;
    margin: 0px;
    padding: 15px 20px;
    background: #FFFFFF;
    margin-top: 50px;
    text-align: center;
    opacity: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-animation: moveIn 1s 3.1s ease forwards;
    animation: moveIn 1s 3.1s ease forwards;
  }
  
  /* .profile-card1  */
  .profile-social-links li {
    list-style: none;
    margin: -5px 0px 0px 0px;
    padding: 0px;
    float: left;
    width: 25%;
    text-align: center;
  }
/*   
  .profile-card1  */
  .profile-social-links li a {
    display: inline-block;
    color: #57B894;
    width: 24px;
    height: 24px;
    padding: 6px;
    position: relative;
    overflow: hidden!important;
    -webkit-border-radius: 50%;
    border-radius: 50%;
  }
  
  /* .profile-card1  */
  .profile-social-links li a i {
    position: relative;
    z-index: 1;
  }
  
  /* .profile-card1  */
  .profile-social-links li a img,
  /* .profile-card1 */
   .profile-social-links li a svg {
    width: 24px;
  }
  
  /* --------------------- */
  .profile-card2 header a > img {
    width: 172px;
    max-width: 100%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -webkit-transition: -webkit-box-shadow 0.3s ease;
    transition: box-shadow 0.3s ease;
    -webkit-box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
    box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
  }
  
  .profile-card2 header a:hover > img {
    -webkit-box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
  }
  
  .profile-card2 .profile-bio {
    width: 175px;
    /* height: 180px; */
    display: inline-block;
    float: right;
    padding: 10px 54px 20px 28px;
    background: #FFFFFF;
    color: #333333;
    margin-top: 50px;
    text-align: center;
    opacity: 0;
    -webkit-animation: moveIn 1s 3.1s ease forwards;
    animation: moveIn 1s 3.1s ease forwards;
  }
  
  .profile-card3 header a > img {
    width: 172px;
    max-width: 100%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -webkit-transition: -webkit-box-shadow 0.3s ease;
    transition: box-shadow 0.3s ease;
    -webkit-box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
    box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
  }
  
  .profile-card3 header a:hover > img {
    -webkit-box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
  }
  
  .profile-card3 .profile-bio {
    width: 175px;
    /* height: 180px; */
    display: inline-block;
    float: right;
    padding: 10px 54px 20px 28px;
    background: #FFFFFF;
    color: #333333;
    margin-top: 50px;
    text-align: center;
    opacity: 0;
    -webkit-animation: moveIn 1s 3.1s ease forwards;
    animation: moveIn 1s 3.1s ease forwards;
  }
  

  /* --------------------------- */
  @-webkit-keyframes init {
    0% {
      width: 0px;
      height: 0px;
    }
    100% {
      width: 56px;
      height: 56px;
      margin-top: 0px;
      opacity: 1;
    }
  }
  
  @keyframes init {
    0% {
      width: 0px;
      height: 0px;
    }
    100% {
      width: 56px;
      height: 56px;
      margin-top: 0px;
      opacity: 1;
    }
  }
  
  @-webkit-keyframes puff {
    0% {
      top: 100%;
      height: 0px;
      padding: 0px;
    }
    100% {
      top: 50%;
      height: 100%;
      padding: 0px 100%;
    }
  }
  
  @keyframes puff {
    0% {
      top: 100%;
      height: 0px;
      padding: 0px;
    }
    100% {
      top: 50%;
      height: 100%;
      padding: 0px 100%;
    }
  }
  
  @-webkit-keyframes borderRadius {
    0% {
      -webkit-border-radius: 50%;
    }
    100% {
      -webkit-border-radius: 0px;
    }
  }
  
  @keyframes borderRadius {
    0% {
      -webkit-border-radius: 50%;
    }
    100% {
      border-radius: 0px;
    }
  }
  
  @-webkit-keyframes moveDown {
    0% {
      top: 50%;
    }
    50% {
      top: 40%;
    }
    100% {
      top: 100%;
    }
  }
  
  @keyframes moveDown {
    0% {
      top: 50%;
    }
    50% {
      top: 40%;
    }
    100% {
      top: 100%;
    }
  }
  
  @-webkit-keyframes moveUp {
    0% {
      background: #FFB300;
      top: 100%;
    }
    50% {
      top: 40%;
    }
    100% {
      top: 50%;
      background: #E0E0E0;
    }
  }
  
  @keyframes moveUp {
    0% {
      background: #FFB300;
      top: 100%;
    }
    50% {
      top: 40%;
    }
    100% {
      top: 50%;
      background: #E0E0E0;
    }
  }
  
  @-webkit-keyframes materia {
    0% {
      background: #E0E0E0;
    }
    50% {
      -webkit-border-radius: 4px;
    }
    100% {
      width: 440px;
      height: 280px;
      background: #FFFFFF;
      -webkit-border-radius: 4px;
    }
  }
  
  @keyframes materia {
    0% {
      background: #E0E0E0;
    }
    50% {
      border-radius: 4px;
    }
    100% {
      width: 440px;
      height: 280px;
      background: #FFFFFF;
      border-radius: 4px;
    }
  }
  
  @-webkit-keyframes moveIn {
    0% {
      margin-top: 50px;
      opacity: 0;
    }
    100% {
      opacity: 1;
      margin-top: -20px;
    }
  }
  
  @keyframes moveIn {
    0% {
      margin-top: 50px;
      opacity: 0;
    }
    100% {
      opacity: 1;
      margin-top: -20px;
    }
  }
  
  @-webkit-keyframes scaleIn {
    0% {
      -webkit-transform: scale(0);
    }
    100% {
      -webkit-transform: scale(1);
    }
  }
  
  @keyframes scaleIn {
    0% {
      transform: scale(0);
    }
    100% {
      transform: scale(1);
    }
  }
  
  @-webkit-keyframes ripple {
    0% {
      transform: scale3d(0, 0, 0);
    }
    50%,
    100% {
      -webkit-transform: scale3d(1, 1, 1);
    }
    100% {
      opacity: 0;
    }
  }
  
  @keyframes ripple {
    0% {
      transform: scale3d(0, 0, 0);
    }
    50%,
    100% {
      transform: scale3d(1, 1, 1);
    }
    100% {
      opacity: 0;
    }
  }
  
  @media screen and (min-aspect-ratio: 4/3) {
    body {
      background-size: cover;
    }
    body:before {
      width: 0px;
    }
   @-webkit-keyframes puff {
      0% {
        top: 100%;
        width: 0px;
        padding-bottom: 0px;
      }
      100% {
        top: 50%;
        width: 100%;
        padding-bottom: 100%;
      }
    }
    @keyframes puff {
      0% {
        top: 100%;
        width: 0px;
        padding-bottom: 0px;
      }
      100% {
        top: 50%;
        width: 100%;
        padding-bottom: 100%;
      }
    }
  }
  
  @media screen and (min-height: 480px) {
    .profile-card header {
      width: auto;
      height: auto;
      padding: 30px 20px;
      display: block;
      float: none;
      border-right: none;
    }
    .profile-card .profile-bio {
      width: auto;
      height: auto;
      padding: 15px 20px 30px 20px;
      display: block;
      float: none;
    }
    .profile-social-links {
      width: 100%;
      display: block;
      float: none;
    }
    @-webkit-keyframes materia {
      0% {
        background: #E0E0E0;
      }
      50% {
        -webkit-border-radius: 4px;
      }
      100% {
        width: 280px;
        height: 440px;
        background: #FFFFFF;
        -webkit-border-radius: 4px;
      }
    }
    @keyframes materia {
      0% {
        background: #E0E0E0;
      }
      50% {
        border-radius: 4px;
      }
      100% {
        width: 280px;
        height: 440px;
        background: #FFFFFF;
        border-radius: 4px;
      }
    }
  }
</style>
<body>
    <nav class="navbar">
        <div class="navbar-left">
            <!-- <a href="index.html" class="logo"><img src=""></a>
         -->
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
            </div>
        
        </div>
        <div class="navbar-center">
            <ul>
                <li><a href="#"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
                <li><a href="#"><i class="fa-solid fa-user"></i><span>Profile</span></a></li>
                <li><a href="#"><i class="fa-solid fa-message"></i><span>Forum</span></a></li>
                <li><a href="#" class="active-link"><i class="fa-solid fa-user-group"></i><span>About us</span></a></li>
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

<h1 class="team"><i>Team Members</i></h1>
   <div class="profile-container">
    <aside class="profile-card1">
        <header>
          <!-- here’s the avatar -->
          <a target="_blank">
            <img src="dumpimages/537210.jpg" class="hoverZoomLink">
          </a>

          <!-- <div class="avatar-holder">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1820405/profile/profile-512.jpg?1533058950" alt="Albert Einstein">
          </div> -->
      
          <!-- the username -->
          <h1>
            Vanessa Nadar
                </h1>
      
          <!-- and role or location -->
          <h2>
                  TE.IT
                </h2>
      
        </header>
      
        <!-- bit of a bio; who are you? -->
        <div class="profile-bio">
      
          <p>
            It takes monumental improvement for us to change how we live our lives. Design is the way we access that improvement.
          </p>
      
        </div>
      
        <!-- some social links to show off -->
        <ul class="profile-social-links">
          <li>
            <a target="_blank" href="https://www.facebook.com/creativedonut">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://twitter.com/dropyourbass">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://github.com/vipulsaxena">
              <i class="fa fa-github"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://www.behance.net/vipulsaxena">
             
              <i class="fa fa-behance"></i>
            </a>
          </li>
        </ul>
      </aside>

      <aside class="profile-card2">
        <header>
          <!-- here’s the avatar -->
          <a target="_blank">
            <img src="dumpimages/Natural-river-waterfall-wallpaper-HD-1920x1440.jpg" class="hoverZoomLink">
          </a>

          <!-- <div class="avatar-holder">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1820405/profile/profile-512.jpg?1533058950" alt="Albert Einstein">
          </div> -->
      
          <!-- the username -->
          <h1>
                 Chantel Braz
                </h1>
      
          <!-- and role or location -->
          <h2>
                  TE.IT
                </h2>
      
        </header>
      
        <!-- bit of a bio; who are you? -->
        <div class="profile-bio">
      
          <p>
            It takes monumental improvement for us to change how we live our lives. Design is the way we access that improvement.
          </p>
      
        </div>
      
        <!-- some social links to show off -->
        <ul class="profile-social-links">
          <li>
            <a target="_blank" href="https://www.facebook.com/creativedonut">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://twitter.com/dropyourbass">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://github.com/vipulsaxena">
              <i class="fa fa-github"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://www.behance.net/vipulsaxena">
             
              <i class="fa fa-behance"></i>
            </a>
          </li>
        </ul>
      </aside>

      <aside class="profile-card3">
        <header>
          <!-- here’s the avatar -->
          <a target="_blank">
            <img src="dumpimages/ZMBC10.jpg" class="hoverZoomLink">
          </a>

          <!-- <div class="avatar-holder">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1820405/profile/profile-512.jpg?1533058950" alt="Albert Einstein">
          </div> -->
      
          <!-- the username -->
          <h1>
                  Neha Nair
                </h1>
      
          <!-- and role or location -->
          <h2>
                  TE.IT
                </h2>
      
        </header>
      
        <!-- bit of a bio; who are you? -->
        <div class="profile-bio">
      
          <p>
            It takes monumental improvement for us to change how we live our lives. Design is the way we access that improvement.
          </p>
      
        </div>
      
        <!-- some social links to show off -->
        <ul class="profile-social-links">
          <li>
            <a target="_blank" href="https://www.facebook.com/creativedonut">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://twitter.com/dropyourbass">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://github.com/vipulsaxena">
              <i class="fa fa-github"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://www.behance.net/vipulsaxena">
             
              <i class="fa fa-behance"></i>
            </a>
          </li>
        </ul>
      </aside>
   </div>
</body>
</html>
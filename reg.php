<?php

// echo "here";
include("classes/connect.php");
include("classes/reg.php");

$Firstname = "";
$Lastname = "";
$Gender = "";
$Age = 0;
$City = "";
$Email = "";
$Username = "";
$Password = "";        

if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $reg = new reg();
    $result = $reg->evaluate($_POST);
    
    if($result != ""){
      // echo "<div>";
      // echo "<br>The following  errors occured<br><br>";
      // 
      echo $result;
      // echo "</div>";
    }
      if(isset($_POST['submit']))
        {
        $Firstname =$_POST['Firstname'];
        $Lastname =$_POST['Lastname'];
        $Gender =$_POST['Gender'];
        $Age =$_POST['Age'];
        $City =$_POST['City'];
        $Email =$_POST['Email'];
        $Username =$_POST['Username'];
        $Password =$_POST['Password'];
        }
        // $Urladdress = strtolower($Firstname) . "." . strtolower($Lastname);
        // $VolID = $this->create_VolID();

        // $query = "insert into volprofile 
        // (VolID,Firstname,Lastname,Gender,Age,City,Email,Username,Password,Urladdress) 
        // values 
        // ('$VolID','$Firstname','$Lastname','$Gender','$Age','$City','$Email','$Username','$Password','$Urladdress')";
        
        // return $query;
        // // echo $data;
        // echo $query;

    // $reg = new reg();
    // $reg->evaluate($_POST);
    // echo $result;

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
  }

  
  
  // $Password = "";
  // $result = "";


// echo "<pre>";
// print_r();
// echo "<pre>"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
</head>
<style>
  *,
*::before,
*::after {
	box-sizing: border-box;
}

body {
	margin: 0;
	font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
	background: #57B894;
}

/* box+textonleft */
.forms-section {
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
    margin-left: 5%;
	margin-top: -1%;
}

.section-title {
	font-size: 40px;
	letter-spacing: 1px;
	color: #fff;
	justify-content: center;
	margin-left: 30%;
}

.forms {
	display: flex;
	align-items: flex-start;
	margin-top: 30px;
	margin-right: -40%;
	margin-left: -50%;
	width: 100%;
    
}

.form-wrapper {
	animation: hideLayer .3s ease-out forwards;
    /* margin-right: -50%; */
}

.form-wrapper.is-active {
	animation: showLayer .3s ease-in forwards;
}

@keyframes showLayer {
	50% {
		z-index: 1;
	}
	100% {
		z-index: 1;
	}
}

@keyframes hideLayer {
	0% {
		z-index: 1;
	}
	49.999% {
		z-index: 1;
	}
}

.switcher {
	position: relative;
	cursor: pointer;
	display: block;
	margin-right: auto;
	margin-left: auto;
	padding: 0;
	text-transform: uppercase;
	font-family: inherit;
	font-size: 16px;
	letter-spacing: .5px;
	color: #4C0827;
	background-color: transparent;
	border: none;
	outline: none;
	transform: translateX(0);
	transition: all .3s ease-out;
}

.form-wrapper.is-active .switcher-login {
	color: #fff;
	transform: translateX(90px);
}

.form-wrapper.is-active .switcher-signup {
	color: #fff;
	transform: translateX(-90px);
}

.underline {
	position: absolute;
	bottom: -5px;
	left: 0;
	overflow: hidden;
	pointer-events: none;
	width: 100%;
	height: 2px;
}

.underline::before {
	content: '';
	position: absolute;
	top: 0;
	left: inherit;
	display: block;
	width: inherit;
	height: inherit;
	background-color: currentColor;
	transition: transform .2s ease-out;
}

.switcher-login .underline::before {
	transform: translateX(101%);
}

.switcher-signup .underline::before {
	transform: translateX(-101%);
}

.form-wrapper.is-active .underline::before {
	transform: translateX(0);
}

.form {
	overflow: visible;
	min-width: 260px;
	margin-top: 50px;
	padding: 25px;
  border-radius: 10px;
	transform-origin: top;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

}

.form-login {
	animation: hideLogin .3s ease-out forwards;
}

.form-wrapper.is-active .form-login {
	animation: showLogin .3s ease-in forwards;
}

@keyframes showLogin {
	0% {
		background: #d7e7f1;
		transform: translate(40%, 10px);
	}
	50% {
		transform: translate(0, 0);
	}
	100% {
		background-color: #fff;
		transform: translate(35%, -20px);
	}
}

@keyframes hideLogin {
	0% {
		background-color: #fff;
		transform: translate(35%, -20px);
	}
	50% {
		transform: translate(0, 0);
	}
	100% {
		background: #d7e7f1;
		transform: translate(40%, 10px);
	}
}

.form .form-signup {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    
}

.form-signup {
	animation: hideSignup .3s ease-out forwards;
    width: 100%;
    display: flex;
    /* padding-left: 4%; */ 
    /* padding-right: 4%;
    /* flex-flow: row wrap;
    align-items: center; */
    /* flex-wrap: nowrap; */
    /* position: fixed; */
    /* flex-wrap: wrap; */
}

.form-wrapper.is-active .form-signup {
	animation: showSignup .3s ease-in forwards;
}

@keyframes showSignup {
	0% {
		background: #d7e7f1;
		transform: translate(-40%, 10px) scaleY(.8);
	}
	50% {
		transform: translate(0, 0) scaleY(.8);
	}
	100% {
		background-color: #fff;
		transform: translate(-35%, -20px) scaleY(1);
	}
}

@keyframes hideSignup {
	0% {
		background-color: #fff;
		transform: translate(-35%, -20px) scaleY(1);
	}
	50% {
		transform: translate(0, 0) scaleY(.8);
	}
	100% {
		background: #d7e7f1;
		transform: translate(-40%, 10px) scaleY(.8);
	}
}

.form fieldset {
	position: relative;
	opacity: 0;
	margin: 0;
	padding: 0;
	border: 0;
	transition: all .3s ease-out;
    /* flex-wrap: wrap; */
}

.form-login fieldset {
	transform: translateX(-50%);
}

.form-signup fieldset {
	transform: translateX(50%);

}

.form-wrapper.is-active fieldset {
	opacity: 1;
	transform: translateX(0);
	transition: opacity .4s ease-in, transform .35s ease-in;
}

.form legend {
	position: absolute;
	overflow: flex;
	width: 1px;
	height: 1px;
	clip: rect(0 0 0 0);
}

.input-block {
	margin-bottom: 5px;
    width: 50%;
    flex: 1;
    margin-right: 25px;
}

.input-block label {
	font-size: 15px;
  color: #0a0a0a;
}

.input-block input {
	display: block;
	width: 100%;
	margin-top: 8px;
	padding-right: 15px;
	padding-left: 15px;
	font-size: 13px;
	line-height: 20px;
	color: #3b4465;
  background: #eef9fe;
  border: 1px solid #cddbef;
  border-radius: 2px;
}

.form [type='submit'] {
	opacity: 0;
	display: block;
	min-width: 120px;
	margin: 30px auto 10px;
	font-size: 18px;
	line-height: 40px;
	border-radius: 25px;
	border: none;
	transition: all .3s ease-out;
}

.form-wrapper.is-active .form [type='submit'] {
	opacity: 1;
	transform: translateX(0);
	transition: all .4s ease-in;
}

.btn-login {
	color: whitesmoke;
	background: #57B894;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
	transform: translateX(-30%);
}

.btn-signup {
	color: whitesmoke;
	background: #57B894;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
	transform: translateX(30%);
}

.list li {
   display: inline; 
}

.column-container {
    flex: 1; /* Each column takes up equal space */
    padding: 0 10px; /* Add padding between columns if desired */
}

.column-container .column1 {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}

.column-container .column2 {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}

.column-container .column3 {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}

.column-container .column4 {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}
.note {
	font-size: 12px;
	color: #777;
}

.required {
    color: red;
    font-size: 16px;
    margin-left: 5px;
  }
  
  .highlight {
    color: #4C0827;
    font-weight: 750;
}

select {
	padding: 4px;
	font-size: 14px;
	border: 1px solid #ccc;
	border-radius: 2px;
}

/* Style the arrow icon */
select::-ms-expand {
	display: none;
}

/* Style for the container (optional) */
.gender-container {
	margin-bottom: 10px;
	padding-right: 45px;
}

/* Style for the label (optional) */
.gender-label {
	font-size: 16px;
	font-weight: normal;
	margin-bottom: 5px;
	display: block; /* Make label a block-level element */
}

.sub-heading {
	color: whitesmoke;
    font-weight: 500;
	font-size: 19px;
	margin-left: 35%;
	margin-top: 1%;
}
</style>
<body>
  <h1 class="section-title"><span class="highlight">C</span>onnect. <span class="highlight">C</span>ollaborate. <span class="highlight">C</span>hange.</h1>
    <!-- Register on <span class="highlight">Community Connect</span> -->
  <p class="sub-heading">Ready to make a difference? Choose your role: </p>
<section class="forms-section">
    <div class="forms">
      <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
          Volunteer
          <span class="underline"></span>
        </button>
        <form class="form form-login" method="post" action="reg.php" id="registration-form-vol">
          <fieldset>
            <legend>Please, enter your email and password for login.</legend>
            <div class="column-container">
              <!-- Column 1 -->
              <div class="column1">
                      <div class="input-block">
                      <label for="vsignup-fname">First name<span class="required">*</span></label>
                      <input value="<?php echo $Firstname ?>" name="Firstname" id="vsignup-fname" type="text" required>
                      </div>
                      <div class="input-block">
                          <label for="vsignup-lname">Last name<span class="required">*</span></label>
                          <input value="<?php echo $Lastname ?>" name="Lastname" id="vsignup-lname" type="text" required>
                      </div>
                  </div>
                  <!-- Column 2 -->
              <div class="column2">
                  <div class="input-block">
                    <label for="vsignup-age">Age<span class="required">*</span></label>
                    <input value="<?php echo $Age ?>" name="Age" id="vsignup-age" type="text" required>
                  </div>
                  <div class="gender-container">
                    <label class="gender-label" for="gender">Gender<span class="required">*</span></label>
                    <select id="text" name="Gender">
                        <option><?php echo $Gender ?></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                  </div>
                    <div class="input-block">
                        <label for="signup-vcity">City<span class="required">*</span></label>
                        <input value="<?php echo $City ?>" name="City" id="signup-vcity" type="text" required>
                    </div>
              </div>
              <!-- Column 3 -->
              <div class="column3">
                  <div class="input-block">
                      <label for="signup-vemail">E-mail<span class="required">*</span></label>
                      <input value="<?php echo $Email ?>" name="Email" id="signup-vemail" type="email" required>
                  </div>
                  <div class="input-block">
                    <label for="signup-vusername">Username<span class="required">*</span></label>
                    <input value="<?php echo $Username ?>" name="Username" id="signup-vusername" type="text" placeholder="Eg; 134RajMalhotra" required>
                </div>
              </div>
              <p class="note">(Note: Choose a username that is concise and easy to remember. <br>This will serve as your login credential and will also help others find you easily)</p>
              <!-- Column 4 -->
              <div class="column4">
                  <div class="input-block">
                      <label for="signup-vpassword">Password<span class="required">*</span></label>
                      <input id="signup-vpassword" type="password" required>
                  </div>
                  <div class="input-block">
                      <label for="signup-vconfpassword">Confirm Password<span class="required">*</span></label>
                      <input value="<?php echo $Password ?>" name="Password" id="signup-vconfpassword" type="password" required>
                  </div>
              </div>    
          </div>
      
          </fieldset>
          <button value="Register" name="submit" type="submit" class="btn-login">Register</button>
          <p class="note"><span>Already registered? </span>
          <b onclick="toggle()" class="pointer">Sign in here</b></p>
        </form>
      </div>


      <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
          Organization
          <span class="underline"></span>
        </button>
        <form class="form form-signup" method="post" action="reg.php">
            <fieldset>
                <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="column-container">
                <!-- Column 1 -->
                <div class="column1">
                        <div class="input-block">
                        <label for="signup-orgname">Organization name<span class="required">*</span></label>
                        <input name="orgname" id="signup-orgname" type="text" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-ngoid">NGO Unique ID<span class="required">*</span></label>
                            <input name="ngoid" id="signup-ngoid" type="text" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-inception">Inception Year<span class="required">*</span></label>
                            <input name="startyear" id="signup-inception" type="text" required>
                        </div>
                    </div>
                    <!-- Column 2 -->
                <div class="column2">
                        <div class="input-block">
                            <label for="signup-orgcontact">Contact<span class="required">*</span></label>
                            <input name="orgcontact" id="signup-orgcontact" type="text" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-address">Address<span class="required">*</span></label>
                            <input name="address" id="signup-address" type="text" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-orgcity">City<span class="required">*</span></label>
                            <input name="orgcity" id="signup-orgcity" type="text" required>
                        </div>
                </div>
                <!-- Column 3 -->
                <div class="column3">
                    <div class="input-block">
                        <label for="signup-orgemail">E-mail<span class="required">*</span></label>
                        <input name="orgemail" id="signup-orgemail" type="email" required>
                    </div>
                    
                  <div class="input-block">
                      <label for="signup-orgusername">Username<span class="required">*</span></label>
                      <input name="orgusername" id="signup-orgusername" type="text" placeholder="Eg; Smile_fndt" required>
                  </div>
                </div>
                <p class="note">(Note: Choose a username that is concise and easy to remember. <br>This will serve as your login credential and will also help others find you easily)</p>
                  <!-- Column 4 -->
                <div class="column4">
                    <div class="input-block">
                        <label for="signup-orgpassword">Password<span class="required">*</span></label>
                        <input name="orgpassword1" id="signup-orgpassword" type="password" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-orgconfpassword">Confirm Password<span class="required">*</span></label>
                        <input name="orgpassword2" id="signup-orgconfpassword" type="password" required>
                    </div>
                </div>    
            </div>
        
            <button type="submit" class="btn-signup">Register</button>
        </fieldset>
        <p class="note"><span>Already registered? </span>
          <b onclick="toggle()" class="pointer">Sign in here</b></p>
        </form>
      </div>
    </div>
  </section>
      
  <!-- <script src="reg.js"></script> -->

<script>
  const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})

function resetForm() {
      document.getElementById("registration-form-vol").reset();
    }
</script>

</body>
</html>
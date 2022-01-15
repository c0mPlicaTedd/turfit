<!DOCTYPE html>
<html>
<head>
	<title>Book turfs online</title>
	<link rel="stylesheet" type="text/css" href="css/header-style.css">
	<script src="https://kit.fontawesome.com/67c66657c7.js"></script>
</head>
<body>
	<input type="checkbox" id="check">
	<nav>
		<div class="icon"><b>TURF</b><b style="color: white;">IT</b></div>
		<div class="search_box">
			<input placeholder="Search for Turfs">
			<i class="fa fa-search"></i>
		</div>
		<ol>
        <li><a href="">Select your location</a></li>
        <li><a href="about.php">About</a></li>
			<li><a><button id = "button" type = 'button'> Sign In </button></a></li>
			<li><a href="help.php">Help</a></li>
		</ol>
		<label for="check" class="bar">
			<span class="fa fa-bars" id="bars"></span>
			<span class="fa fa-times" id="times"></span>
		</label>
	</nav>


    <!-- local modal-->
    <div class="locationbg-modal">
        <div class = "locationmodal-content">
                <div type="text" class = "locationmodal-title">Select your location</div>
                <li><a href="kandivali.php">Kandivali</a></li>
                <li><a href="kandivali.php">Borivali</a></li>
                <li><a href="kandivali.php">Bandra</a></li>
                <li><a href="kandivali.php">Kalyan</a></li>
                <li><a href="ulhasnagar.php">Ulhasnagar</a></li>
                <li><a href="mulund.php">Mulund</a></li>
        </div>
    </div>

	<!-- modal section-->
    <div class="bg-modal">
        <div class = "modal-content">
            <div class="close">+</div>
                <div type="text" class = "register-title">Get Started</div>
                <div type="text" class = "register-subtitle">Welcome to Turf it</div>
            <form action="" id="modal-form">
                <input class="modal-input-email" type="text" placeholder="Email">
                <input class="modal-input-password"type="text" placeholder="Password">
                <a href="login.inc.php" class="button" >Create account</a>
                <a href="signin.php" class="signinhyperlink">Already have an account?</a>
            </form>
        </div>
    </div>
</body>

<script>
    
    document.getElementById("button").addEventListener("click",function(){
      document.querySelector(".bg-modal").style.display="flex";
      document.getElementById("modal-form").reset();
    });

    document.querySelector(".close").addEventListener("click",function(){
        document.querySelector(".bg-modal").style.display="none";
        
    });
    document.getElementById("userlocation").addEventListener("click", function() {
       document.querySelector(".locationbg-modal").style.display="flex";
    });
    function launchLocationModal(){
        document.querySelector(".locationbg-modal").style.display="flex";
    
    };
    
</script>

    
</html>
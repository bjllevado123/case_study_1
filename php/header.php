<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css?v=1">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&family=Rajdhani:wght@700&family=Raleway:wght@400;700&family=Rubik&family=Squada+One&display=swap" rel="stylesheet">

</head>
<body>
    <div class="hero_banner">
        <div class="container p-3">
            <div class="d-flex justify-content-center">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="../index.php" class="nav-link" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="education.php" class="nav-link">Education</a></li>
                    <li class="nav-item"><a href="achievements.php" class="nav-link">Achievements</a></li>
                </ul>
            </div>
        

            <div class="profile">
                <div class="profile_pic text-center align-items-center">
                    <img src="../assets/images/profile.png" alt="my-profile">
                </div>
                    

                <div class="my_name"> 
                    <div class="name_cont"><h1>Brian Julius L. Llevado</h1></div>
                    <div class="sect_cont"><h2>Software Developer</h2></div>
                    <div class="text-center" style="margin-top: 20px;">
                    <a href="assets/files/CV-Brian_Llevado.pdf" download>
                            <button type="button" class="btn" style="background-color: #ffffff; border: 2px solid #932432">
                                <span style="font-family: 'Kanit', sans-serif; font-weight: bold;">
                                    <img src="../assets/images/icons/download.svg" alt=""> 
                                    Download CV
                                </span>
                            </button>
                        </a>
                    </div>
                    
                </div>     
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script type="text/javascript">
		const currentLocation = location.href;
		const menuItem = document.querySelectorAll('a');
		const menuLength = menuItem.length
		for (let i = 0; i<menuLength; i++){
			if(menuItem[i].href === currentLocation){
				menuItem[i].className = "nav-link active"
			}
		}
	</script>
</body>
</html>
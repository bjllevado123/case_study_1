<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/stylesheet.css?version=v9">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="hero_banner">
        <div class="container">
            <div class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="../index.php" class="nav-link active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="education.php" class="nav-link">Education</a></li>
                    <li class="nav-item"><a href="achievements.php" class="nav-link">Achievements</a></li>
                </ul>
            </div>
        

            <div class="profile">
                <div class="profile_pic">
                    <img src="../assets/images/profile.png" alt="my-profile">
                </div>
                    

                <div class="my_name"> 
                    <p>Brian Julius L. Llevado</p> 
                </div>     
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script>
        $(".nav .nav-link").on("click", function(){
            $(".nav").find(".active").removeClass("active");
            $(this).addClass("active");
        });
    </script>
</body>
</html>
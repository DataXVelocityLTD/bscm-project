<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>BSC | Home</title>

    <script src="https://kit.fontawesome.com/06a228e990.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="styles/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        h1 {
            color: white;
        }
        img {
            margin-top: 70px;
        }

        a{
            border-radius: 10px !important;
            width: 200px;
            margin-top: 30px;
        }
        .fa-key{
            transform: rotate(400deg);
            font-size: 2rem;
            margin-right: 0.7rem;
        }
        #background-img{
            height: 400px; 
            width: 400px;
            margin: 0 auto;
            margin-top: 0;
            background-image: url("assets/images/Transparent Full HLT Vector.png");
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.25;
        }

        @media screen and (max-width: 768px) {
            .fa-key{
                font-size: 2.7rem;
                margin-right: 1.5rem;
            }
        }

        @media screen and (max-width: 375px) {
            #background-img {
                height: 300px; 
                width: 300px;
            }

            .fa-key{
                font-size: 1.3rem;
            }
        }

       
    </style>
</head>

<body>
    <div id="header-container">
        <h4 class="brand-text">BSC - Manager<sup>TM</sup></h4>
        <select class="selectpicker first-select" data-width="fit">
            <option data-content='<span class="flag-icon flag-icon-us">English</span>'>English</option>
        </select>
    </div>
    <div class="wrapper">
        <div id="page-icon">
            <img class="d-block mx-auto company__logo" src="assets/icons/HLT Transparent.png" alt="BSCM Logo">
        </div>
        <h1 style="text-align: center;"> Studio Certification</h1>
        <h1 style="text-align: center;">Manager Admin</h1>
        <a href="login.php" class="btn btn-default d-block mx-auto fs-3 fw-bold text-white border border-success resize"><i class="fas fa-key"></i> Login</a>
        <div id="background-img"></div>
    </div>
    
    <footer class="admin__index__footer">
        <a class="top__link" href="#">Copyright: DataX Velocity LTD</a>
        <div class="bottom__links">
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Us</a>
            <a href="#">User Agreement</a>
        </div>
    </footer>

</body>

</html>
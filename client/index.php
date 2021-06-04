<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSC | Home</title>

    <script src="https://kit.fontawesome.com/06a228e990.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles/index.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        #header-container {
            width: 100%;
            /* background: red; */
            margin-top: -40px;
        }
        h1 {
            color: white;
        }

        .brand-logo {
            margin-top: 20px;
        }
        .buttons{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 30.7%;
            margin: 0 auto;
            margin-top: 20px;
        }
        

        .login-link {
            border-radius: 10px !important;
            flex-basis: 35%;
            font-size: 1.4vw;
            font-weight: bold;
            margin-top: 10px;
            margin-left: 10px;
        }

        .create-link {
            border-radius: 10px !important;
            flex-basis: 55%;
            font-size: 1.4vw;
            font-weight: bold;
            /* height: 40px; */
            margin-top: 10px;
        }

        .fa-key {
            transform: rotate(400deg);
            font-size: 3vh;
            margin-right: 0.7rem;
        }
        @media(max-width: 891px){
            .buttons{
                display: block;
            }
            .create-link{
                display: block;
                font-size: 15px;
            }
            .login-link{
                display: block;
                margin-left: 0;
                font-size: 15px;
            }
        }
        @media(max-width: 1070px){
            .brand-logo{
                width: 15%;
            }
        }
        @media(max-width: 635px){
            .brand-logo{
                width: 20%;
            }
        }
    
        @media(max-width: 419px){
            .brand-logo{
                width: 25%;
            }
            
        }
        
    </style>
</head>

<body>
    <div id="header-container">
        <h4 class="brand-text">BSC - Manager<sup>TM</sup></h4>
        <select class="selectpicker first-select" data-width="fit">
            <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
        </select>
    </div>
    <div id="page-icon">
        <img class="brand-logo d-block mx-auto" src="assets/icons/HLT Transparent.png" width="10%" alt="">
    </div>
    <h1 style="text-align: center;">Welcome!</h1>
    <h4 style="text-align: center; color:white">Blockchain Studio Certification Manager</h4>
    <div class="buttons">
        <a href="enter_email.php" class="create-link btn btn-success text-white border-success"><i class="fas fa"></i> Create Account</a>
        <a href="login.php" class="login-link btn btn-default text-white border border-success"><i class="fas fa-key"></i>Login</a>
    </div>
    <img class="d-block mx-auto" src="assets/images/Transparent Full HLT Vector.png" width="30%" alt="">



    <!-- <footer>
<p style="color: green; text-align:center; margin-top:70px;">Copyright: DataX Velocity LTD</p>
</footer> -->
    <?php include('includes/footer.php'); ?>

</body>

</html>
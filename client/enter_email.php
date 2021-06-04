<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/enter_email.css">

    <script src="https://kit.fontawesome.com/06a228e990.js" crossorigin="anonymous"></script>

</head>

<body>
    <div id="header-container">
        <h4 class="brand-text">BSC - Manager<sup>TM</sup></h4>
        <select class="selectpicker first-select" data-width="fit">
            <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
        </select>
    </div>
    <div class="form-headings">
        <p style="text-align: center;">Certification Account</p>
        <h1 style="text-align: center;" class="second-text">Create Account</h1>
    </div>
    <div class="container">
        <div class="progress-bar">
            <div class="step">
                <div class="bullet">
                    <!-- <span>1</span> -->
                </div>
                <p>STEP 1</p>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <div class="bullet">
                    <!-- <span>2</span> -->
                </div>
                <p>STEP 2</p>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <div class="bullet">
                    <!-- <span>3</span> -->
                </div>
                <p>STEP 3</p>
                <div class="check fas fa-check"></div>
            </div>
        </div>
        <div class="form-outer">
            <form action="#" method="">
                <div class="page slidepage">
                    <p>You can create an account in <br>one minute!</p>
                    <div class="field">
                        <div class="label">Your email</div>
                        <input type="email" class="login-input form-control" placeholder="bscmanager@gmail.com" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <p>By accepting to use our product, you agree to meet the terms and conditions thereto</p>
                    <div class="field">
                        <button class="create-btn">Create Account</button>
                    </div>
                </div>

                <div class="page">
                    <p>Check your email and enter <br>confirmation code</p>
                    <div class="field">
                        <div class="label">Your email</div>
                        <input type="email" class="login-input form-control" placeholder="bscmanager@gmail.com" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="special">
                        <div class="special-field">
                            <div style="text-align: left;" class="label">Code</div>
                            <input type="number">
                        </div>
                        <button class="second-create">Create Account</button>
                    </div>
                    <button class="decline-button go-back">Decline</button>
                </div>

                <div class="new page">
                    <p>Please save it in a safe place!</p>
                    <div class="new-field">
                        <div class="label">Password</div>
                        <input type="password">
                    </div>
                    <div class="new-field">
                        <div class="label">Repeat Password</div>
                        <input type="password">
                    </div>
                    <div class="new-field">
                        <div class="label">Secret Code</div>
                        <input type="password">
                    </div>
                    <div class="new-field">
                        <div class="label">Account Number</div>
                        <input type="password">
                    </div>
                    <div class="field buttons" style="width: 50%; margin: 0 auto; height: 25px;">
                        <button class="next-button"><a href="../admin/register.php">Next</a> </button>
                    </div>
                </div>   
            </form>
        </div>
        <div style="width:60%; margin:0 auto;">
            <span>Have an account?</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="bottom-link">Login</a>
        </div>
        <?php include('includes/footer.php'); ?>
    </div>
    <script src="script.js"></script>



</html>
<?php


?>


<!DOCTYPE html>
<html lang="en">

<?php include('includes/header.php'); ?>


<!-- <div class="decoration"></div> -->
<section class="container-fluid">
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-3 shift-section">
            <h2 style="color: white; text-align:center">Admin Login</h2>
            <div class="decoration">
                <p class="no-account">Don't have an account? </p>
                <span>Register <a class="reg-link" href="admin.php">here</a></span>

            </div>
            <form class="form-container">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Login</label>
                    <input type="email" class="login-input form-control" placeholder="BSC00000@gmail.com" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="login-input form-control" id="exampleInputPassword1">
                    <a href="#" class="lnk-forget"><i>FORGOT PASSWORD?</i></a>
                </div>
                <button type="submit" class="login-submit">Login</button>
            </form>
        </section>
    </section>
</section>


<footer>
    <p style="color: green; text-align:center; margin-top:150px; font-weight:bold; font: size 30px;">Copyright: DataX Velocity LTD</p>
</footer>

</html>
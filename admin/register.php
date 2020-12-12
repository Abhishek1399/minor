<?php
session_start();
include('includes/header.php');
include('includes/nav.php');
?>



    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0"> 
                <!-- Nested Row within Card Body -->
                 <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="code.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="username" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email"  placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="confirmpassword" id="exampleConfirmPassword" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                <button type="submit" name="registerbtn" class="btn btn-primary btn-user btn-block">Register Account</button>
                                <!-- <a href="login.php" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a> -->
                                </div>
                                <hr>
                                <a href="https://gmail.com" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                                <div class="card-body">
                                <?php
                                if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                                {
                                    echo '<h2>'.$_SESSION['status'].'</h2>';
                                    unset($_SESSION['status']);
                                }
                                if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                                {
                                    echo '<h2 class="bg-info">'.$_SESSION['success'].'</h2>';
                                    unset($_SESSION['success']);
                                }
                                ?>
                            </div>
                            </form>
                            <hr>
                            
                            
                            
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div> 

    

<?php
include('includes/script.php');
include('includes/footer.php');
?>
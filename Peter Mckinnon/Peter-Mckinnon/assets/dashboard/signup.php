<?php 
    require('../../config/config.php');
    require('../../config/db.php');

    include("../inc/header_dashboard.php")

?>

<body>

<!-- Main Body -->
<main>
    <div class="col-lg-7">
        <div class="card text-white bg-dark card-info mb-3" style=" max-width: 25rem; padding: 10px">  
            <form action="<?php echo ROOT_URL_ADMIN; ?>inc/signup.inc.php" method="POST" > 
                <!-- first name  -->
                <label for="" class="form-label  info-text">First Name:</label>
                <input class="form-control info-text input-box" type="text" name="firstname" placeholder="First Name"><br>
                <!-- lastname -->
                <label for="" class="form-label info-text">Last Name:</label>
                <input class="form-control info-text input-box" type="text" name='lastname' placeholder="Last Name"><br>
                   <!-- username -->
                <label for="" class="form-label info-text">Username:</label>
                <input class="form-control info-text input-box" type="text" name="username" placeholder="Username"><br>
                <!-- email -->
                <label for="" class="form-label info-text">Email</label>
                <input class="form-control info-text input-box" type="email" name="email" placeholder="Email"><br>
                <!-- password -->
                <label for="" class="form-label info-text">Password:</label>
                <input class="form-control info-text input-box" type="password" name="password" placeholder="Password"><br>
                <!-- confirm -->
                <label for="" class="form-label info-text">Confirm Password:</label>
                <input class="form-control info-text input-box" type="password" name="confirm" placeholder="Confirm Password"><br>
                <!-- Signup -->
                <input type="submit" name="signup-submit" class="login input-box form-control info-text">
            </form>    
        </div>  
    </div>
</main>
<!-- Main Body -->
    
</body>
</html>
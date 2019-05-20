<?php 
    require('../../config/config.php');
    require('../../config/db.php');
    




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PETER MCKINNON - dashboard</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<!-- Main Body -->
<main>
    <div class="container">
        <div id="landing-page-dashboard">
            <div class="login-signup">
                <form action="<?php echo ROOT_URL_ADMIN; ?>inc/login.inc.php" method="POST">
                    <div class="form-box">
                        <label  class="info-text">Username: *</label><br>
                        <input class="info-text input-box" name='username' type="text" value="" placeholder="username"><br>
                        <label  class="info-text">Password: *</label><br>
                        <input class="info-text input-box" name='password' type="password" placeholder="password"><br>
                        <input class="login input-box info-text" name="login-submit" type='submit' value="Login">
                    </div>
                </form>
</div>
        </div>
    </div>
</main>
<!-- Main Body -->
    
</body>
</html>
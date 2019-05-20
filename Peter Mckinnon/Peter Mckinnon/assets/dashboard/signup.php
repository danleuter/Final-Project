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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<!-- Main Body -->
<main>
      <div class="col-lg-7">
                  <div class="card text-white bg-dark card-info mb-3" style=" max-width: 25rem; padding: 10px">  
                   <form action="<?php echo ROOT_URL_ADMIN; ?>inc/signup.inc.php" method="POST" >   
                                <label for="" class="form-label  info-text">First Name:</label>
                                <input class="form-control info-text input-box" type="text" name="firstname" placeholder="First Name"><br>
                        
                                <label for="" class="form-label info-text">Last Name:</label>
                                <input class="form-control info-text input-box" type="text" name='lastname' placeholder="Last Name"><br>
                                
                      
                        <label for="" class="form-label info-text">Username:</label>
                        <input class="form-control info-text input-box" type="text" name="username" placeholder="Username"><br>
                        <label for="" class="form-label info-text">Email</label>
                            <input class="form-control info-text input-box" type="email" name="email" placeholder="Email"><br>
                        <label for="" class="form-label info-text">Password:</label>
                        <input class="form-control info-text input-box" type="password" name="password" placeholder="Password"><br>
                        <label for="" class="form-label info-text">Confirm Password:</label>
                        <input class="form-control info-text input-box" type="password" name="confirm" placeholder="Password"><br>
                        <input type="submit" name="signup-submit" class="login input-box form-control info-text">
                        </form>    
                        </div>  
                        </div>
</main>
<!-- Main Body -->
    
</body>
</html>
<?php 
    require('../../config/config.php');
    require('../../config/db.php');

if(isset($_POST['signup-submit'])){

// Get form data text
$fname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lname = mysqli_real_escape_string($conn, $_POST['lastname']);
$uname = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirm = mysqli_real_escape_string($conn, $_POST['confirm']);


//$que = "INSERT INTO author (firstname, lastname, username, email, password) VALUES('$fname', '$lname', '$uname', '$email', '$password', )";

if(empty($uname) || empty($email) || empty($password)) {
    header("Location: ../dashboard/loginandregister.php?error=emptyfields&username=".$uname."&email".$email);
    exit();
} 
else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $uname)){
    header("Location: ../dashboard/loginandregister.php?error=invalidemail&username");
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../dashboard/loginandregister.php?error=invalidemail&username=".$uname);
    exit();
} 

else if (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
    header("Location: ../dashboard/loginandregister.php?error=invalidusername&email=".$email);
    exit();
} 
else if ($password !== $confirm) {
    header("Location: ../dashboard/loginandregister.php?error=passwordcheck=".$uname."&email".$email);
    exit();
}
else {
    
    $sql = "SELECT username FROM author WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../dashboard/loginandregister.php?error=sqlerror2");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $uname);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if($resultCheck > 0){
            header("Location: ../dashboard/loginandregister.php?error=usernameTaken&email".$email);
            exit();

        }
        else {

            $sql = "INSERT INTO author (firstname, lastname, username, email, password) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../dashboard/loginandregister.php?error=sqlerror1s2");
                exit();
            }
            else {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);



                mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $uname, $email, $hashedPwd);
                mysqli_stmt_execute($stmt);
                    header("Location: ../index.php");
                    exit();
            }

        } 
    
    

    }



    }


mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else {
header("Location: ../dashboard/loginandregister.php");
exit();  
}

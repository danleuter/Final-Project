<?php 
    require('../../config/config.php');
    require('../../config/db.php');


    if (isset($_SESSION['userId'])) {
           
       
        include('../inc/profile.inc.php');

        // Free Result
        mysqli_free_result($result);

        // Close Connection
        mysqli_close($conn);
    }
    else {
    echo "you are logout";
    }

    if(isset($_POST['submit_profile'])){


        // Get form data text
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $uname = mysqli_real_escape_string($conn, $_POST['username']);
        $about = mysqli_real_escape_string($conn, $_POST['aboutme']);

        	$query = "UPDATE posts SET 
                    firstname='$fname',
                    lastname='$lname',
                    username='$uname',
                    aboutme='$about',
                        WHERE admin_id = {$update_id}";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL_ADMIN.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
    }


    include("../inc/header_dashboard.php");
    include('../inc/navbar.php');
    

?>

<!-- Sidebar -->

<div class="sidebar">
    <div class="list-group">
        <a href="<?php echo ROOT_URL_ADMIN; ?>index.php" class="list-group-item list-group-item-action ">
            Published Articles
        </a>
        <a href="<?php echo ROOT_URL_ADMIN; ?>inc/draft_post_dashboard.php" class="list-group-item list-group-item-action">Draft Articles
        </a>
        <a href="<?php echo ROOT_URL_ADMIN; ?>inc/pool_of_ideas.php" class="list-group-item list-group-item-action ">Pool of Ideas
        </a>
        <a href="<?php echo ROOT_URL_ADMIN; ?>inc/profile_dash.php" class="list-group-item list-group-item-action active">Profile
        </a>
        <a href="#" class="list-group-item list-group-item-action">Settings
        </a>
    </div>
</div>
    
   
<!-- Main Body -->
<main class="dashboard-bg"></main> 

<div class="articles">
<div class="card">
        <div class="card-header">
            <img src="../images/profile.jpeg" alt="Profile Image" class="profile-img">
        </div>
        <form method="POST" action="<?php echo ROOT_URL; ?>" class="card-body">
            <input type='name' name='firstname' class="full-name" value='<?php echo $post['firstname']; ?>'/> <input type='name' name='lastname' value='<?php echo $post['lastname']; ?>'>
            <input type='name' name='username' class="username" value='<?php echo $post['username']; ?>'/>
            <input type='email' name='email' class="city" value='<?php echo $post['username']; ?>'/>
            <input type='textarea' name='aboutme' class="desc" value='<?php echo $post['aboutme']; ?>'>
            <p>
                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon tumblr"><i class="fab fa-tumblr"></i></a>
                <a href="#" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-icon google-plus"><i class="fab fa-google-plus"></i></a>
            </p>
            <input type="hidden" name="update_id" value="<?php echo $post['admin_id']; ?>" />
            <input type="submit" name="submit_profile" value="save" class="btn btn-outline-info"/>
        </form>
        <div class="card-footer">
            <div class="col vr">
                <p><span class="count">1.8K</span> Followers</p>
            </div>
            <div class="col">
                <p><span class="count">2.0K</span> Following</p>
            </div>
        </div>
    </div>
    </div>
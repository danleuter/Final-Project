<?php 
    require('../../config/config.php');
    require('../../config/db.php');

    
    include('profile.inc.php');
    

    include("header_dashboard.php");
    include('navbar.php');
    

?>
    
        
    

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
        <a href="#" class="list-group-item list-group-item-action">Messages
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
        <div class="card-body">
            <p class="full-name"><?php echo $post['firstname']; ?> <?php echo $post['lastname']; ?></p>
            <p class="username"><?php echo $post['username']; ?> </p>
            <p class="city"><?php echo $post['email']; ?></p>
            <p class="desc"><?php echo $post['aboutme']; ?></p>
            <p>
                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon tumblr"><i class="fab fa-tumblr"></i></a>
                <a href="#" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-icon google-plus"><i class="fab fa-google-plus"></i></a>
            </p>
        </div>
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
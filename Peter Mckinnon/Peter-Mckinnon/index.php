<?php
	require('config/config.php');
	require('config/db.php');

    include('assets/inc/featured_post.inc.php');
    include('assets/inc/header.php');
    include('assets/inc/navbar_client.php');
    
?>
    

<!-- Main Body -->
<main>
    <!-- landing page -->
    <div class="landing-page">
        <div class="landing-text text-white">
            <h1 class="text-white">Inspire. Travel. Learn.</h1>
            <p class='text-white initialism'>Photographer & Filmmaker. Lover of coffee and good stories.</p>
        </div>
    </div>
    <!-- End of Landing Page -->
<hr>
    <!-- Featured Articles -->
    
<div class="jumbotron d-flex flex-wrap" style="margin-top: 100px 10px 10px !important;">
    <?php foreach($posts as $post) : ?>
        <div class="card" style="width: 18rem; margin:10px; padding:10px;">
        <img class="card-img-top" src="https://source.unsplash.com/featured/?nature,water,life" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $post['art_title']; ?></h5>
            <p class="card-text"><?php echo $post['art_desc']; ?></p>
            <a href="<?php echo ROOT_URL; ?>pages/articles.php?art_id=<?php echo $post['art_id']; ?>" class="btn btn-sm btn-primary">Read More</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>


<hr>
    <!-- Profile  -->
    <div id='profile' class="team-polarpro-page">
        <h2 class="title text-center">Peter Mckinnon</h2>
        <div class='d-flex'>
            <div class="header" style='background: url("images/Coffee-Break-bg.jpg"); background-size: cover; background-position:center; height: 100%; display: block; height: 50vw; max-width: 50vw;'>
                <img src="https://cdn.shopify.com/s/files/1/1050/9944/t/30/assets/McKinnonProfile-1545072902782.png?8307029976075919746" alt="" class='profile-img'>
            </div>
            <div class="team-polarpro-page">
                    <div class='visionary-text '>
                            <p>Accomplished Photographer &amp; Filmmaker, Peter McKinnon has amassed a large following on several platforms including over 2.7 million on his self titled YouTube Channel. His Video center around strong storytelling, industry tutorials and his love for coffee. The Toronto resident takes his viewers along on his globetrotting travels, creating amazing videos and photographs as he goes. Sprinkled into his video catalog you will find short film projects that are nothing short of amazing. "The Bowl","The Owl", &amp; "For her." are just a few examples worth pausing what you are dooing to give them a watch. Seriously, go give them a watch..... we will wait.</p><p>While McKinnon's film work is impressive enough, he also creates some of the most unique and well composed photos in the industry. @petermckinnon boasts over 1.3 million followers who turn to him for Inspiration. Numbers aside, it's easy to tell what separates McKinnon from the rest of the pack.</p><p>He is constantly staying ahead of the project at hand and publishing videos at a strong pace.</p>
                    </div>
            </div>
        </div>
    </div>
<hr>
    <!-- Work with us -->

    <div class="contact">
        <div class="contact-us row">
            <form class="card-message col-lg-3" action="" method="post">
                    <Legend class="d-flex"><h3>Work with us</h3></Legend>
                <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label class="form-label" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label class="form-label" for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="form-label" for="exampleTextarea">Message</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
                
                <button type="submit" class="btn btn-light btn-submit" >Submit</button>
            </form>
          
        </div>
    </div>

</main>
<!-- Main Body -->


</body>
</html>
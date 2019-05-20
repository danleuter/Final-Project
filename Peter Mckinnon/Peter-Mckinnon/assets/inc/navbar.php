


 <nav class="menu-web">
        <div class="menu-container">
            <div class="brand-name" >
                <p class="logo"><a href="#">Peter Mckinnon</a></p>
            </div>
            <div class="navbar-menu">
                    <div class="search-bar"><input type="search" name="" id="article-search" placeholder="Search"></div>
                <ul>
                    <!-- <li><input type="search" name="" id="article-search" placeholder="Search"></li> -->
                    <a class="menu-btn initialism" href="<?php echo ROOT_URL_ADMIN; ?>dashboard/create.php">Create <i class="fas fa-pencil-alt"></i></a>
                    <a class="menu-btn initialism" href="<?php echo ROOT_URL_ADMIN; ?>dashboard/edit_profile.php?admin_id=<?php echo $post['admin_id']; ?>"> <?php echo $post['firstname']; ?> <i  class="profile fas fa-user-circle"></i></a>
                    <a class="menu-btn initialism" href="<?php echo ROOT_URL_ADMIN; ?>inc/logout.php"> logout <i class="fas fa-user-alt-slash"></i></a>
                </ul>
            </div>
        </div>
    </nav>


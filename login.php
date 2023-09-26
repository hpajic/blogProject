<?php

require "admin/includes/dbh.php";
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

<!--- basic page needs
================================================== -->
<meta charset="utf-8">
<title>Kylcus Blog</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- mobile specific metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/vendor.css">
<link rel="stylesheet" href="css/styles.css">

<!-- script
================================================== -->
<script src="js/modernizr.js"></script>
<script defer src="js/fontawesome/all.min.js"></script>

<!-- favicons
================================================== -->
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


<!-- preloader
================================================== -->
<div id="preloader"> 
<div id="loader"></div>
</div>
<?php

include "header-opaque.php"

?>
    <section class="s-content">
  
    <form method="POST"  action ="includes/login.php">
        <h2> LOGIN ADMIN</h2>
        <?php
        
        if(isset($_GET['error'])){
         
       ?>     
       <p class="error"><?php echo $_GET['error']; ?></p>
       <?php
        }
        
        ?>
        <label>Username</label>
        <input type="text" name="uname" placeholder="User name">

        <label>Password</label>
        <input type="password" name="password" placeholder="Password">

        <button type="submit" name="login-btn">Log in</button>


        </form>

    </section>
<?php




include "footer.php"

?>



<!-- Java Script
================================================== -->
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>

</html>
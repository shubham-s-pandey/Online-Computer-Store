<?php
   include ('session.php');

   
   $user = $_SESSION['login_user'];
   include ('header.php');
   echo '<div class="alert alert-warning">';
   echo '<strong>Success!</strong>. You will be now redirected to payment gateway!';
   echo '<a href="#"><br> Click here to proceed!</a>';
   echo '</div>';
   ?>


<?php
   include ('footer.php');
   ?>

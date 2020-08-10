<?php 
   include('session.php')
   ?>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="application/javascript">
   $(document).ready(function(){
      $('[data-toggle="offcanvas"]').click(function(){
          $("#navigation").toggleClass("hidden-xs");
      });
   });
   
</script>
<!------ Include the above in your HEAD tag ---------->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">
<body class="home" style="background-image: url('./images/wallpaper1.jpg');">
   <div class="container-fluid display-table" >
      <div class="row display-table-row">
         <?php include('side_bar.php') ?>
         <div class="col-md-10 col-sm-11 display-table-cell v-align">
            <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
            <div class="row">
               <header style="background-image: url('./images/header.jpg');">
                  <?php include('header.php') ?>
               </header>
            </div>
            <div class="user-dashboard" >
               <h1 style="color:#afddff;font-weight: bold;font-size:40px">Statistics</h1>
               

<div class="col-md-7 col-sm-7 col-xs-12 gutter">
<?php 

$sql = "SELECT id FROM users";
$res = $db->query($sql);
$usercount = 0;

while($row = @mysqli_fetch_array($res)){
    $usercount++;
    
}
echo "<div class='panel panel-danger'>";
echo "<div class='panel-heading'><h2>Total Number of registered users</h2></div>";
echo "<div class='panel-body'><h2>$usercount</h2></div>";
echo "</div><br><br>";


$sql = "SELECT id FROM contacts";
$res = $db->query($sql);
$messcount = 0;

while($row = @mysqli_fetch_array($res)){
    $messcount++;
    
}
echo "<div class='panel panel-warning'>";
echo "<div class='panel-heading'><h2>Unseen Messages</h2></div>";
echo "<div class='panel-body'><h2>$messcount</h2></div>";
echo "</div><br><br>";


    

?>
</div>  



                  
                  
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

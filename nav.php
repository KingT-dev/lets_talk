<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="materialize/css/materialize.css">
</head>
<style>
    .cont {
  margin: 0 auto;
  max-width: 1280px;
  width: 90%;
}
/* .sticky{
  position: fixed;
  top: 0;
  width: 100%;
} */

#navbar{
  position: sticky;
  top: 0px;
  width: 100%;
  transition: top 0.3s;
}

</style>
<body style="background-color: rgba(255, 111, 0, 0.653);">
<section id="header">
<div style="background-color:rgb(43, 20, 20);padding:3px; ">
  <p class="container white-text center"><b>LET'S TALK</b></p>
</div>
</section>
    <nav class="sticky white  z-depth-1" style="z-index: 999;" id="navbar">
        <div class="cont navbar" >
               
              <div class="row">
                  <div class="col l1">
                  <ul style="background-color:red;" >
                    <li>  <a href="" class="white-text ">  <img src="img/chat-1.png" alt="logo" width="110%" class="logo" style="position:relative;top:12px;"></a></li>
                    </ul>
               
                  </div>
                  <div class="col l8">
                  <?php
                      if (isset($_POST['email'])) {
                          $email=$_POST['email'];
                        $retrieve = "SELECT * FROM signup WHERE email = '$email' ";
                        $sqlretrieve= mysqli_query($connect, $retrieve);
                        $users= mysqli_fetch_all($sqlretrieve, MYSQLI_ASSOC);
                       
                        foreach ($users as  $user) {
                            ?>
                          <ul class="right">
                          <li class="brown-text">  <b><?php echo "Welcome ".$user['username']." let's talk";?></b> </li>  
                          </ul>
                          <?php
                        }
                      }
                  
                        
                       
                        
                     
                        
                       
                   
                    ?>

                  </div>
              </div>
              
        </div>
    </nav>
    <br><br><br><br><br>
    
    
 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="materialize/css/materialize.css">
</head>
<style>
    li:hover{
        background-color:rgb(43, 20, 20);
        color:white;
    }
   
   
</style>
<body>
    <?php
    include 'nav.php';
    ?>
    <ul class="sidenav sidenav-fixed brown-text z-depth-2" id="slide-out " style="z-index:20; background-color:rgb(255, 111, 0); width:200px;">
    <div style="background-color:rgb(43, 20, 20);padding:3px; ">
  <p class="container white-text center" style="padding:20px;"><b></b></p></div>
  <br><br><br>

        <li style="display:inline;"><img src="" alt="profile picture"></li>
        <li><a href="" class="white-text"><B>My Account</B></a></li>
        <li><a href=""class="white-text"><B>Meet People</B></a></li>
        <li><a href=""class="white-text"><b>View Post</b></a></li>
        <li><a href=""class="white-text"><b>Settings</b></a></li>
        <li><a href=""class="white-text"><b>Costumer Service</b></a></li>
        <hr>
        <br>
        <div class="c">
        <li class="left" style="border-radius:100px;"><a href=""class="white-text">Logout</a></li>
        </div>
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger">menu</a>

    

    <script>
$(document).ready(function(){
    $('.sidenav').sidenav();
});

    </script>
</body>
</html>
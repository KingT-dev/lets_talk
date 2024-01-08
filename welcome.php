<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="materialize/css/materialize.css">
</head>
<style>
    .btnn:hover{
        background-color: rgb(255, 111, 0);
        color: white;
    }
</style>
<body>
    <?php
    include 'sidenav.php';
   $username = $_POST['username'];
   if (isset($_POST['submit'])) {
    $user= $_POST['username'];
    $email= $_POST['email'];
    $password = $_POST['pass'];
    $dob = $_POST['dob'];
    

    $insert = "INSERT INTO signup(username, email, pass_word, birthday) VALUES ('$user', '$email', '$password', '$dob')";
    mysqli_query($connect, $insert);
    ?>

  <?php
  
  

}
    ?>

    <div class="row">
        <div class="col l3"></div>
        <div class="col l2"></div>
        <div class="col l4">
            <div class="card white" >
                <div class="card-title">

                </div>
                <div class="card-content">
                    <form action="" method="get" enctype="multipartform-data">
                                     <label for="picture" class="brown-text darken-2 "><b>Select Photo</b></label>
                                     <br>
                                    <input type="file" name="photo" id="photo">
                                    <hr>
                                    <br>
                                    <label for="message" class="brown-text darken-2 "><b>Type your message here</b></label>
                                    <textarea rows="5" cols="30" name="message" id="message" required maxlength="200" >  </textarea>
                                    <input type="text" name="date" id="date" value="<?php echo date("d-M-Y h:i"); ?>" hidden>
                                  
                                  
                                    
                                   <hr>
                                        <div class="row">
                                            <div class="col l4"></div>
                                            <div class="col l4">

                                               
                                               <input type="submit" name="submit" id="submit" class="btnn darken-2 black-text darken-2 " value="Post Message" style="border:solid 1px grey; border-radius:50px; padding:15px; display:block; position:relative;right:10px;">
                                            

                                            </div>
                                            <div class="col l4"></div>
                                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col l3"></div>
    </div>
    <br><br><br><br><br><br>
</body>
</html>
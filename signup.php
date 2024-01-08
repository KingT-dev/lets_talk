<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: rgb(230, 230, 230);">
<style>
   
input{
    color:rgb(69, 26, 26);
}

.btnn:hover{
        background-color: rgb(255, 111, 0);
        color: white;
    }
</style>
    <?php 
include 'nav.php';

    ?>
    <!-- <img class="responsive-img" src="img/pawel-czerwinski-Tyg0rVhOTrE-unsplash.jpg" alt="" width="100%"> -->
<div class="container">

    <div class="row">
        <div class="col l3"></div>
        <div class="col l6">
                <div class="card z-depth-2 white" >
                            <div class="card-title" >
                                <h4 class="brown-text darken-2 center"><b> Sign Up here.</b> </b></h4>
                            </div> 
                            <div class="card-content">                       
                                <form action="welcome.php" method="post" enctype="multipartform-data"> 
                                    <label for="username" class="brown-text darken-2 ">USERNAME</label>
                                    <input type="text" name="username" id="username"   required>
                                    <label for="email" class="brown-text darken-2 ">EMAIL</label>
                                    <input type="email" name="email" id="email" required >
                                    <label for="pass" class="brown-text darken-2 "> PASSWORD</label>
                                    <input type="password" name="pass" id="pass"  required>
                                    <label for="dob" class="brown-text darken-2 ">DATE OF BIRTH</label>
                                    <input type="date" name="dob" id="dob"  required>
                                        <div class="row">
                                            <div class="col l4"></div>
                                            <div class="col l4">

                                                <input type="submit" name="submit" id="submit" class="btnn brown-text darken-2 " style="border:solid 1px grey; border-radius:50px; padding:15px; display:block; position:relative;right:10px;" value="SIGN UP NOW">

                                            </div>
                                            <div class="col l4"></div>
                                        </div>
                                </form>
                                    <p class="brown-text darken-2">Already have an account? Login <a class="yellow-text" href="login.php">HERE</a></p>
                            </div>
                    
                            
                    
                </div>
        </div>
        <div class="col l3"></div>
    </div>
</div>


</body>
</html>
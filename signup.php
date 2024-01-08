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
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: rgba(255, 139, 16, 0.612);">
<style>
   
input{
    color:rgb(69, 26, 26);
}
</style>
<?php
                                
        $error= '';
        if (isset($_POST["submit"])) {
            $username = htmlspecialchars($_POST["username"]);
            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST["pass"]);
            $dob = htmlspecialchars($_POST["dob"]);

            // Check for existing username
            $queryUsername = "SELECT * FROM users WHERE usernames = '$username'";
            $resultUsername = mysqli_query($connect, $queryUsername);

            // Check for existing email
            $queryEmail = "SELECT * FROM users WHERE emails = '$email'";
            $resultEmail = mysqli_query($connect, $queryEmail);

            if (mysqli_num_rows($resultUsername) > 0) {
                $error= "Username already exists!";
            } elseif (mysqli_num_rows($resultEmail) > 0) {
                $error= "Email already exists!";
            } else {
                    // Proceed with registration
                    // $insert= "INSERT INTO users (usernames, emails, passwords, dob) VALUES ('$username', '$email', '$password', '$dob')";
                    // mysqli_query($connect, $insert);
                
                // Proceed with registration using prepared statement
                $insert = "INSERT INTO users (usernames, emails, passwords, dob) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_prepare($connect, $insert);
                mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $password, $dob);
                mysqli_stmt_execute($stmt);

                // Store values in session
                 $_SESSION['email'] = $email;
                 $_SESSION['username'] = $username;

                // Redirect only if the registration is successful
                header("Location: control.php");
                exit();
            }

             // Define the recipient email address
             $to = $_SESSION['email'];

             // Define the subject of the email
             $subject = "Successful Registration";
 
             // Define the message body
             $message = "Thank you for registering on our website. Your registration was successful.";
 
             // Define additional headers 
             $headers = "From: bossadetim1@gmail.com";
             
 
             // Send the email
             $mailSuccess = mail($to, $subject, $message, $headers);
 
             // Check if the email was sent successfully
             if ($mailSent) {
                 echo "Registration successful";
             } else {
                 echo "Registration Failed";
             }
 
        }

    ?>

    <!-- <img class="responsive-img" src="img/pawel-czerwinski-Tyg0rVhOTrE-unsplash.jpg" alt="" width="100%"> -->
<div class="container">

    <div class="row">
        <div class="col l3"></div>
        <div class="col l6">
                <div class="card z-depth-2 white" >
                            <div class="card-title" >
                                <h4 class="brown-text darken-2 center"><b> Sign Up here.</b> </b></h4>
                                <h6 style="color:red; font-weight:bold; text-align:center;"><?php echo $error; ?></h6>
                            </div> 
                            <div class="card-content">                       
                                <form action="" method="post" enctype="multipartform-data"> 
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

                                             <input type="submit" name="submit" id="submit" class="btn orange darken-2 brown-text darken-2 " value="SIGN UP">

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
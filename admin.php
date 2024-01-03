<?php
  session_start();
  include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="materialize/css/materialize.css"> -->
    <title>Document</title>
</head>

<style>

@media  (max-width: 992px){
  .form__title{
  font-size: 10px;
  }

}

  
  :root {
  font-family: 'Poppins', sans-serif;
  line-height: 1.5;
  font-weight: 400;

  color-scheme: #000;
  background-color: #242424;

  font-synthesis: none;
  text-rendering: optimizeLegibility;
}

* {
  box-sizing: border-box;
}

body {
  height: 100vh;
  background: #fff;
  padding: 0;
  margin: 0;
}

main {
  height: 100%;
  padding: 24px;
}

section {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}


.form__title {
  text-align: center;
  color: #030712;
  font-weight: bold;
  font-size: 30px;
  margin: 0 0 8px;
}

.form__description {
  color: #374151;
  text-align: center;
  margin: 0 0 32px;
}

.form__animation {
  background-color: #f7f8fa;
  border-radius: 24px;
  overflow: hidden;
}

.logo {
  width: 40px;
  height: 40px;
  border-radius: 100%;
  background: #000;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 32px;
}

.logo svg {
  width: 24px;
  height: 24px;
}

form {
  width: 100%;
  max-width: 420px;
}

.form-control__label {
  display: block;
  margin: 14px 0 4px;
  color: #0d0c22;
  font-weight: 500;
}

.form-control {
  height: 52px;
  display: block;
  width: 100%;
  border: 1px solid #6b7280;
  padding: 18px 20px;
  transition: outline 200ms ease, box-shadow 200ms ease;
  border-radius: 12px;
  outline: none;
  background-color: #fff;
  color: #0d0c22;
  margin-bottom: 28px;
  font-size: 16px;
}

.form-control:focus {
  border-color: #0d0c22;
  box-shadow: 0 0 0 4px rgb(0 0 0 / 10%);
}

.form-control:user-invalid {
  border-color: #dc2626;
}

.form-control:user-invalid:focus {
  border-color: #dc2626;
  box-shadow: 0 0 0 4px rgb(220, 38, 38, .1);
}

.password-field {
  position: relative;
}

.password-field svg {
  position: absolute;
  width: 24px;
  height: 24px;
  right: 13px;
  top: 13px;
}

.form__submit {
  height: 52px;
  width: 100%;
  display: block;
  background: #0d0c22;
  border-radius: 100px;
  border: none;
  color: #fff;
  font-weight: 600;
  font-size: 16px;
  cursor: pointer;
  transition: .2s;
}

.form__submit:hover {
  box-shadow: 0 -1px 10px rgba(13,12,34, 0.3);
}

.password__settings {
  display: flex;
  justify-content: space-between;
  margin-bottom: 28px;
}

.password__settings__remember {
  font-size: 14px;
  color: #0d0c22;
  font-weight: 500;
  display: flex;
  align-items: center;
  cursor: pointer;
}

.password__settings__remember input {
  width: 0;
  height: 0;
  opacity: 0;
  margin: 0;
}

.custom__checkbox {
  width: 20px;
  height: 20px;
  border-radius: 6px;
  border: 1px solid #6b7280;
  margin-right: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: .2s;
}

.custom__checkbox svg {
  transform: scale(0);
  width: 16px;
  height: 16px;
}

input:focus + .custom__checkbox {
  border-color: #0d0c22;
  box-shadow: 0 0 0 4px rgb(0 0 0 / 10%);
}

input:checked + .custom__checkbox svg {
  transform: scale(1);
}

a {
  font-size: 14px;
  color: #0875e4;
  font-weight: 500;
  text-decoration: none;
}

.form__footer {
  font-size: 14px;
  text-align: center;
  margin: 32px 0 0;
}
    
    
    
   

</style>

<body>
    <main>
        <section class="form">
            <div class="logo">
                     
            </div>
            <h1 class="form__title">Log into your Account</h1>
            <p class="form__description">Welcome! Enter your information</p>

            <form method="POST" action="">
                <label class="form-control__label">Email:</label>
                <input type="text" class="form-control" name="admin_email" id="admin_email" placeholder="Email">
        
                <label class="form-control__label">Password</label>
                <div class="password-field">
                    <input type="password" class="form-control" name="admin_password" id="admin_password" minlength="8" maxlength="15" placeholder="Enter Password">
                </div>
                <div class="password__settings">
                    <label class="password__settings__remember">
                        <input type="checkbox">
                        <span class="custom__checkbox"></span>
                        Remember me
                    </label>
        
                    <a href="recover_pass.php">Forgot Password?</a>
                </div>
        
                <button type="submit" name="submit" id="submit" class="form__submit" id="submit">Log In</button>
            </form>
        </section>
    </main> 
   
</body>
</html>

<?php
    if (isset($_POST["submit"])) {
      $email= htmlspecialchars($_POST ["admin_email"]);
      $password= htmlspecialchars($_POST ["admin_password"]);
      
      
      $login= "SELECT * FROM admins WHERE emails='$email' && passwords='$password'";
      $retrieve= mysqli_query($connect, $login);
      $sql_check= mysqli_fetch_all($retrieve, MYSQLI_ASSOC);
    
      if(!$sql_check){
        echo "<script> alert('User does not exist')</script>";
    }else{
        ?>
        <script>location.href='control.php'</script>
        <?php
        $_SESSION['email']= $email;
    };
    }
  
   
  
?>
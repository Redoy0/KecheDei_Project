 <?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- NAVBAR -->
    
    
    
    
    <!-- Signup -->
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style_sign.css" />
    
    
    
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!-- SignIn -->
          <form action="#" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name = "uname"placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name ="pass" placeholder="Password" required/>
            </div>
            <input type="submit" name="signin"value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <!-- SignUp -->
          <form action="#" method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name ="uname" placeholder="Username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name ="email" placeholder="Email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="phone" name ="phone" placeholder="Phone No" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name ="pass" placeholder="Password" required/>
            </div>
            <input type="submit" class="btn" value="Sign up"name ="signup" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Just Go Ahead with Keche Dei.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Thank You Dear. Welcome To Keche Dei.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    
    <script src="app.js"></script>
  </body>
</html>
<?php
  if($_POST['signup'])
  {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass  = $_POST['pass'];
    
   
      
      $query = "INSERT INTO signup values('$uname','$email','$phone','$pass')";
      $data = mysqli_query($conn,$query);
      if ($data) {
      echo "<script>alert('Registration Complete');</script>";
      }
      else
      {
      
        echo "Data Inserted";
      }
      
    }
    if(isset($_POST['signin']))  
    {
      
        $uname = $_POST['uname'];
        $pass  = $_POST['pass'];
        
        $query = "SELECT * FROM signup where username = '$uname' and password = '$pass'";
        $data = mysqli_query($conn,$query);
        // $row= mysqli_fetch_array($data,MYSQLI_ASSOC);
        // $count = mysli_num_row($data);
        $result = mysqli_fetch_assoc($data);
        
        if($data)
        {
          $userName = $result['username'];
          $userPass = $result['password'];
          echo $userName;
          echo $userPass;
          if($uname == $userName && $userPass == $pass){
           echo "<script>
                    alert('Log in Success');
                    window.location.href='index.php';
                    </script>";
          }else{
            echo "<script>alert('Log in failed');window.location.href='signup_signin.php';
                  </script>";
            
          }
            
        }
        else
        {
            echo "<script>alert('Log in failed');window.location.href='signup_signin.php';
                  </script>";
        }
          
          
          
      }
      
      
    
?>
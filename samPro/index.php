<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn - Flip The Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>img.user-avatar{
        display: block;
    margin: 0 auto; 
    width: 100px; 
    height: auto;
    }</style>
</head>
<body>
    <div class="container" id="signup" style="display: none;">
        <!-- Add the user avatar image here -->
        <img src="../images/user.png" alt="User Avatar" class="user-avatar">
        <h1 class="ftitle">Register</h1>
        <form method="POST" action="register.php">
            <div class="input-details">
                <i class="fas fa-user"></i>
                <input type="text" name="firstName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-details">
                <i class="fas fa-user"></i>
                <input type="text" name="lastName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-details">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <label for="email">E-mail</label>

            </div>
            <div class="input-details">
                <i class="fas fa-lock"></i>
                <input type="text"  name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <input type="submit" class="btn" value="Sign-Up" name="signUp">

        </form>

        <p class="or">
            --------- or ---------
        </p>
        <div class="icons">
            <a href="https://accounts.google.com/v3/signin/identifier?ifkv=Ab5oB3rsjYtbyoF5nz0jZl1V_XmuCXBhXNvRavw7KXkSO6EIfM7qj6tbom82xyCQCpKsKjJE-0MS&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S1996686095%3A1726121702009953&ddm=0" target="_blank">
            <i class="fab fa-google"></i>
            </a>
            <a href="https://www.facebook.com/login/" target="_blank">
            <i class="fab fa-facebook"></i>
            </a>
        </div>

        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton">Sign-In</button>
        </div>
        

    </div>


    <div class="container" id="signIn">
        <img src="../images/user.png" alt="User Avatar" class="user-avatar">
        <h1 class="ftitle">Log In</h1>
        
        <form method="POST" action="register.php">
          <div class="input-details">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-details">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="icons">
            <a href="https://accounts.google.com/v3/signin/identifier?ifkv=Ab5oB3rsjYtbyoF5nz0jZl1V_XmuCXBhXNvRavw7KXkSO6EIfM7qj6tbom82xyCQCpKsKjJE-0MS&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S1996686095%3A1726121702009953&ddm=0" target="_blank">
            <i class="fab fa-google"></i>
            </a>

            <a href="https://www.facebook.com/login/" target="_blank">
            <i class="fab fa-facebook"></i>
            </a>
            
        </div>
        <div class="links">
          <p>Don't have account yet?</p>
          <button type="submit" id="signUpButton" name="signUp">Sign Up</button>
        </div>
    </div>    
    <script src="script.js"></script>
    
</body>
</html>

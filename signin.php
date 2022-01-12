
<!DOCTYPE html>
<html lang = "en">
    <head>
        <title> Book turfs online </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/register-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class = "registerpage">
            <header class= "header">
                <a href = "index.php" class = "header-turfit"> TURFIT </a>
            </header>
            <div class="wrapper">
            <div class="register-form">
                <div data-bn-type="text" class = "register-title">Get Started</div>
                <div data-bn-type="text" class = "register-subtitle">Welcome to Turf it</div>
                <form action="includes/signup.inc.php" method="post">
                <div class="form">
                    <div class = "form-group-email">
                        <label class="label-email">Email</label>
                        <input type="text" name = "email" class="form-input" > 
                    </div>
                    <div class = "form-group-pwd">
                        <label class="label-password">Password</label>
                        <input type="password"  class="form-input" name="password">
                    </div>
                
                    <a href="" class="createacc-box">
                    <button class="btn-createaccount" type="submit" name="submit">Create Account</button>
                    </a> 
                    </div>
                </form>
                
                </div>
            </div>
           
            
        </div>
        
 
    </body>
</html>
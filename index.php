<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="one">
        <div class="onea">
           
            Enter Your Details..
        </div>
        
        <div class="form-container">
            <form action="connect.php" method="post">
                <h2>Log In</h2>
                <div class="form-group">
                    <label for="email">Your Email :</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email Here" required>
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password Here" required>
                </div>
                <div class="form-group">
                    
<div class="slk">
            <button class="slk1"><a href="home.php">OK</a></button>
            <button class="slk2"><a href="firstpage.php">Cancel</a></button>
            </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

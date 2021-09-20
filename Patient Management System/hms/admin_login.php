<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-form">
<div class="card">
<div class="inner-box" >

    <h1>ADMIN LOGIN</h1>
    <form action="connection.php" method="POST">
        <input type="text" class="input-box" placeholder="Name" name="name"
        required>
        <input type="email" class="input-box" placeholder="Email Id" name="email"
        required>
        <input type="password" class="input-box" placeholder="Password" name="password"
        required>
        <button type="submit" name="submit" class="submit-btn">Login</button>
        
    </form>
       
</div>
</div>
</div>
</body>
</html>
<html>
<head>
    <title>login and registration form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="card">
<div class="inner-box" id="card">
<div class="card-front">
    <h2>LOGIN</h2>
    <form action="validation.php" method="POST">
        <input type="email" class="input-box" placeholder="Your Email Id" name="email"
        required>
        <input type="password" class="input-box" placeholder="Password" name="password"
        required>
        <button type="submit" name="submit" class="submit-btn">Submit</button>
    </form>
        <button type="button" class="btn" onclick="openRegister()">I'm New Here</button>
</div>
<div class="card-back">
    <h2>REGISTER</h2>
    <form action="connection.php" method="POST">
        <input type="text" class="input-box" placeholder="Your Name" name="name"
        required>
        <input type="email" class="input-box" placeholder="Your Email Id" name="email"
        required>
        <input type="password" class="input-box" placeholder="Password" name="password"
        required>
        <button type="submit" name="submit" class="submit-btn">Submit</button>
        
    </form>
        <button type="button" class="btn" onclick="openLogin()">I've an Account</button>
    
</div>
</div>
</div>
</div>
    
    <script>

    var card = document.getElementById("card");

    function openRegister(){
        card.style.transform = "rotateY(-180deg)";
    }
    function openLogin(){
        card.style.transform = "rotateY(0deg)";
    }

    </script>

</body>
</html>
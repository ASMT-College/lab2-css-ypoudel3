<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/70a81ab19a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="nav">
        <div class="logo">LOGO</div>
        <ul class="nav-list">
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Post</a></li>
        </ul>
    </div>
</header>
<section>
    <div class="center-container">
    <div class="box">
        <legend>Login</legend>
        <br>
        <input type="text" name="username" id="username" placeholder="Email or phone number">
        <br><br>
        <input type="password" name="password" id="password" placeholder="Password">
        <br><br>
        <button class="log"> LOG IN</button><br><br>
        <h3><a href="">Forgot your password?</a></h3>
        <h3>Don't have an account? <a href="signup.php">SignUp!</a></h3>
    </div>
    </div>
</section>
<footer>
Copywrite @ Yunisha's Project <?php echo date('Y'); ?>
</footer>

</body>
</html>
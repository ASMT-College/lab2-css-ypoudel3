<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
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
        <legend>Create Account</legend><br>
        <input type="text" name="fname" id="fname" placeholder="First Name">
        <br><br>
        <input type="text" name="lname" id="lname" placeholder="Last Name">
        <br><br>
        <input type="date" name="date" id="date" placeholder="Date of Birth">
        <br><br>
        <div class="radio-group">
        <input type="radio" name="option" id="option1">
        <label for="option1">Male</label>
        </div>
        <div class="radio-group">
        <input type="radio" name="option" id="option2">
        <label for="option2">Female</label>
        </div>
        <div class="radio-group">
        <input type="radio" name="option" id="option3">
        <label for="option3">Other</label>
        </div>
        <br>
        <br>
        <input type="email" name="email" id="email" placeholder="Email">
        <br><br>
        <input type="password" name="password" id="password" placeholder="Password">
        <br><br>
        <button class="log"> REGISTER</button><br><br>
        <h3>Already have an account? <a href="login.php">Log In!</a></h3>
</section>

<footer>
Copywrite @ Yunisha's Project <?php echo date('Y'); ?>
</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/index/style.css">
</head>
<body>
    <?php include 'navbar.php'?>
    <script src="javascript/darkmode.js" onload="darkmodecheck()"></script>
    <?php include 'php/christmas.php'?>

    <div class="lrpanel">
        <h2>Login</h2>
        <p>You don't think you should login first and behave like human not robot.</p>
        <form onsubmit="">
        
            <input type="text" id="username" class="lr-input" name="username" placeholder="Username" required><br>

            <input type="password" id="password" class="lr-input" name="password" placeholder="●●●●●●●●●" required><img class="in-icon" src="scss/components/_lrpanel.scss"><br>

            <input type="submit" value="Login">

        </form>
        <p class="switch-lr">You are new? <a class="switch-lr-link" href="register_page.php">Create a new account</a></p>
    </div>

    <?php include 'search.php'; ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>ThruHike</title>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora|Ubuntu+Condensed" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>ThruHike</h1>
        <form id="loginForm" action="" method = "post">
            <div class="row formQuestion">
                <input type="text" name="username" placeholder = "Username" required>
            </div>
            <div class="row formQuestion">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="row formQuestion">
                <button class="btn btn-success" type="submit"> Login </button>
            </div>
            <div class="row formQuestion">
                <button class="btn btn-sm btn-info" id="createAccountButton" onclick="window.location.replace('account_create.php')">Create Account</button>
            </div>
        </form>
    </div>
    <?php include 'inc/scripts.php';?>
</body>
</html>
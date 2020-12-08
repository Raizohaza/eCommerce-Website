<!DOCTYPE html>
<?php require_once 'functions.php'; ?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Web 1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php if($currentUser): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log out<?php echo $title == 'Log out' ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="changePwd.php">Change Password<?php echo $title == 'Profile' ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile<?php echo $title == 'Profile' ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="status.php">Status<?php echo $title == 'Profile' ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login<?php echo $title == 'Login' ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register<?php echo $title == 'Register' ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="forgotPassword.php">Forgot Password<?php echo $title == 'Forgot Password' ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                    </li>
                <?php endif; ?>
                </ul>
            </div>
            </nav>
        </div>
        <h2 class="text-muted"><?php echo $title?></h2>
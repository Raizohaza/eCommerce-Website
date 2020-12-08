<?php
require_once 'init.php';
require_once 'functions.php';

$title = 'Forgot Password';

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $user = findUserByUserName($email);
    if (!$user) {
        $error = 'Not found user!';
    } else {
        $link = 'http://localhost/pmtoan-web1/test/vertifyPassword.php?id=' . $user['id'];
        sendMail($email, 'Recover account', 'Please click link:'.$link );
        var_dump($email,$link);
        #header('location: login.php');
        #exit();
    }
}




?>
<?php include 'header.php'; ?>



<?php if (isset($error)) : ?>
<?php echo $error; ?>
<?php else : ?>
<form action="forgotPassword.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input name="email" type="text" class="form-control" step="any" id="email">

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php endif; ?>

<?php include 'footer.php'; ?>
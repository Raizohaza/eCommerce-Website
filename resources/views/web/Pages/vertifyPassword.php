<?php
require_once 'init.php';
require_once 'functions.php';

$title = 'Reset Password';
$id = $_GET['id'];

if (isset($_POST['password']) && isset($_POST['ConfirmPassword'])) {
    if (empty($_POST['$password']) && empty($_POST['ConfirmPassword'])) {
        $error = 'Mật khẩu không được để trống';
    } else if (ctype_space($_POST['password']) && ctype_space($_POST['ConfirmPassword'])) {
        $error = 'Mật khẩu không được để trống';
    } else {
        $password = $_POST['password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];
        if ($password == $ConfirmPassword) {
            $error = 'Update thành công';
            $user = updatePassword($id, password_hash($password, PASSWORD_DEFAULT));
            header('Location: index.php');
            exit();
        } else {
            $error = 'Update không thành công';
        }
    }
}

?>
<?php include 'header.php'; ?>



<?php if (isset($error)) : ?>
<?php echo $error; ?>
<?php else : ?>
<form method="POST">
    <div class="form-group">
        <label>Password</label>
        <input name="password" type="password" class="form-control" id="">
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input name="ConfirmPassword" type="password" class="form-control" id="ConfirmPassword">
    </div>
    <button type="submit" class="btn btn-primary">Confirm</button>
</form>
<?php endif; ?>

<?php include 'footer.php'; ?>
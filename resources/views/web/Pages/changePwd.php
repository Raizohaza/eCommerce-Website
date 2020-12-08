<?php 
require_once 'init.php';

$title = 'Change Password'; 

if(isset($_POST['oldpwd']) && isset($_POST['password']) && isset($_POST['confirmpassword'] ))
{
    $oldpwd = (int)$_POST['oldpwd'];
    $password = (int)$_POST['password'];
    $confirmpassword = (int)$_POST['confirmpassword'];

    if(!password_verify($oldpwd,$currentUser['password'])){
        echo '<div class="alert alert-danger" role="alert">' . 'Password incorrect' . '</div>';
    } 
    elseif(password_verify($password,$currentUser['password'])){
        echo '<div class="alert alert-danger" role="alert">' . 'Password is the same!' . '</div>';
    } 
    elseif ($password != $confirmpassword) 
    {
            echo '<div class="alert alert-danger" role="alert">' . 'Password incorrect' . '</div>';
    } 
    else 
    {

        $user = changePwd(password_hash($password,PASSWORD_DEFAULT));
        if($_SESSION)
        echo '<div class="alert alert-success" role="alert">' . 'Success' . '</div>';
        //sleep(1);
        //header('Location: index.php');
    }
}
?>
<?php include 'header.php' ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<form action="changePwd.php" method="POST">
    <div class="form-group">
        <label for="oldpwd">Old password</label>
        <input type="password" name="oldpwd" id="oldpwd" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="confirmpassword">Confirm password</label>
        <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" required>
    </div>
    <button button type="sumit" class="btn btn-primary">Comfirm</button>
</form>

<?php include 'footer.php'; ?>
<?php 
require_once 'init.php';

$title = 'Register';

if(isset($_POST['email']) && isset($_POST['password']) )
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    
    $exists = existsUsername($email);
    if ($exists == true) {
        echo '<div class="alert alert-danger" role="alert">' . 'email already exists' . '</div>';
    }
    elseif ($password != $confirmpassword) 
    {
            echo '<div class="alert alert-danger" role="alert">' . 'Password incorrect' . '</div>';
    } 
    else 
    {

        $user = createUser($email,password_hash($password,PASSWORD_DEFAULT));
        
        $_SESSION['email'] = $user['email'];
        var_dump($email);
        if($_SESSION)
        echo '<div class="alert alert-success" role="alert">' . 'Success' . '</div>';
        
        header('Location: index.php');
    }
}
?>
<?php include 'header.php' ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<form action="register.php" method="POST">
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="confirmpassword">Confirm password</label>
        <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" required>
    </div>
    <button button type="sumit" class="btn btn-primary">Register</button>
</form>

<?php include 'footer.php'; ?>
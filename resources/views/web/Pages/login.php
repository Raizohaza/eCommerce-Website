<?php include 'header.php' ?>
<?php
    require_once 'init.php';

    $title = 'Login';

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = findUserByUsername($email);
        if(!$user){
            $error = 'Not found user';
        } else {
            if(!password_verify($password,$user['password'])){
                $error = 'Password incorrect';
            } else {
                
                $_SESSION['email'] = $user['email'];
                header('Location:index.php');
                
                exit();
            }
        }
    }

    // if ($currentUser){
    //     header('Location:index.php');
    //     exit();
    // }
?>



<?php if (isset($error)): ?>
<div class="alert alert-danger" role="alert">
    <?php echo $error; ?>
</div>
<?php else: ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<form action="login.php" method="POST">
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <button button type="submit" class="btn btn-primary">Login</button>
</form> 
<?php endif; ?>
<?php include 'footer.php'; ?>
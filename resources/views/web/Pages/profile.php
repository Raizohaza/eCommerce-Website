
<?php
    require_once 'init.php';

    $title = 'Profile';
    if(isset($_FILES['avatar'])){
        $ava = $_FILES['avatar'];
        $newImage = resizeImage($ava["tmp_name"], 250, 250);
        imagejpeg($newImage, './avatars/' . $currentUser['id'].'.jpg');
        
    }
?>

<?php include 'header.php' ?>
<?php if (isset($error)): ?>
<div class="alert alert-danger" role="alert">
    <?php echo $error; ?>
</div>
<?php else: ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<img src="./avatars/<?php echo $currentUser['id']; ?>.jpg"/>
<form action="profile.php" method="POST" enctype="multipart/form-data">
    <form>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" class="form-control-file" id="avatar" name="avatar">
        </div>
        <button button type="submit" class="btn btn-primary">Update avatar</button>
    </form>
</form> 
<?php endif; ?>
<?php include 'footer.php'; ?>
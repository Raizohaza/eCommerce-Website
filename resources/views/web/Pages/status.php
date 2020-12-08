
<?php
    require_once 'init.php';

    $title = 'Status';
    if(isset($_POST['status'])){
        $status = $_POST['status'];
        
        createPost($status['status'],(int)$currentUser['id']);
        
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
<form action="status.php" method="POST">
    <form>
        <div class="form-group">
            <label for="status">status</label>
            <input type="text" name="status" id="status" placeholder="What's on your mind, <?php echo $currentUser['email'];  ?>?" class="form-control" required>
        </div>
        <button button type="submit" class="btn btn-primary">Update status</button>
    </form>
</form> 
<?php endif; ?>
<?php include 'footer.php'; ?>
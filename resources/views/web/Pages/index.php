<?php 
    require_once 'init.php';
    $title = 'Home';
    
?>

<?php include 'header.php'; ?>
<?php if(isset($currentUser)): ?>
    <div class="alert alert-info" role="alert">
        Welcome <?php echo $currentUser['email'];  ?>, have a great day!
        <?php #sendMail("toanphamhcmus@gmail.com",'teting','Tesinggggggggggg'); ?>
    </div>
    <?php include 'newsfeed.php'; ?>
<?php else : ?>
    <div class="alert alert-warning" role="alert">
        You are not loged in!
    </div>
<?php endif; ?>
<?php include 'footer.php'; ?>
<?php
  require_once 'init.php';
  $posts = getPosts();
  $numPosts = array_count_values( $posts);
  $user = findUserById((int)$posts[0]['UserId']);
 ?>   

<div class="row">
  <?php 
      foreach($posts as $post)
      {
        $user = findUserById((int)$post['UserId']);
        
  ?>   
  
    <div class="column">
      <div class="card mb-3" style="float: center;display: flex; width: 500px;height: 200px;">
        <div class="row no-gutters">
          <div class="col-md-4" style="max-width: 250px;max-height: 250px;">
              <img src="./avatars/<?php echo $user['id']; ?>.jpg"  class="card-img" />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo $user['email'] ?></h5>
              <p class="card-text"><?php echo $post['content'] ?></p>
              <p class="card-text"><small class="text-muted"><?php echo $post['createdAt'] ?></small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>


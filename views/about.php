<?php
$posts = Post::all();
require __DIR__ . '/partials/header.php';

?>   
<div class="container mt-2">
  <div class="row">
    <div class="col-md-8">
      It will be daily journal for me 
    </div>
    <div class="col-md-4">
      <?php require __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</div>
<?php require __DIR__. '/partials/footer.php'; ?>   




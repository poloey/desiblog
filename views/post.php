<?php
$id = $_GET['id'] ?? 1;
$post = Post::find($id);
require __DIR__ . '/partials/header.php';

?>   
<div class="container mt-2">
  <div class="row">
    <div class="col-md-8">
        <div class="card my-2">
          <div class="card-body">
            <h2><a href="/post?id=<?= $post->id ?>"><?php echo $post->title; ?></a></h2>
            <div class="my-2">
              <?php echo $post->content; ?>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-4">
      <?php require __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</div>
<?php require __DIR__. '/partials/footer.php'; ?>   



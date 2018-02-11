<?php
$id = $_GET['id'] ?? 1;
$category = Category::find($id);
require __DIR__ . '/partials/header.php';

?>   
<div class="container mt-2">
  <div class="row">
    <div class="col-md-8">
      <div class="my-2 p-5 bg-info text-white">
        <h2>All posts under <?php echo $category->name; ?></h2>
      </div>
      <?php foreach ($category->posts as $post): ?>
        <?php require  __DIR__ . '/partials/post_chunk.php'; ?>
      <?php endforeach ?>

    </div>
    <div class="col-md-4">
      <?php require __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</div>
<?php require __DIR__. '/partials/footer.php'; ?>   





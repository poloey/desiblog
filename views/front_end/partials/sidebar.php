<?php
$users = User::all();
$categories = Category::has('posts')->get();

?>
<div>
  <h2 class="mb-2">
    All authors
  </h2>
  <?php foreach ($users as $user): ?>
    <li class="list-group-item"><a href="/author?id=<?= $user->id ?>"><?= $user->name ?></a></li>
  <?php endforeach ?>

  <h2 class="mt-3 mb-2">
    All Category
  </h2>
  <?php foreach ($categories as $category): ?>
    <li class="list-group-item"><a href="/category?id=<?= $category->id ?>"><?= $category->name ?></a></li>
  <?php endforeach ?>


</div>
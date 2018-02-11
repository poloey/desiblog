        <div class="card my-2">
          <div class="card-body">
            <h2><a href="/post?id=<?= $post->id ?>"><?php echo $post->title; ?></a></h2>
            <h4>Posted by <a href="/author?id=<?= $post->user->id ?>"></a> <?= $post->user->name ?> <span class="text-muted h6">On <?= $post->created_at->diffForHumans() ?></span></h4>
            <div class="my-2">
              <?php echo limit_text($post->content); ?>
            </div>
            <a class="btn btn-outline-info" href="/post?id=<?= $post->id ?>">Read More</a>
          </div>
        </div>

        <div class="card my-2">
          <div class="card-body">
            <h2><a href="/post?id=<?= $post->id ?>"><?php echo $post->title; ?></a></h2>
            <div class="my-2">
              <?php echo limit_text($post->content); ?>
            </div>
            <a class="btn btn-outline-info" href="/post?id=<?= $post->id ?>">Read More</a>
          </div>
        </div>

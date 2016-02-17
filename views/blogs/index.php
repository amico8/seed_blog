      <p><a href="/seed_blog/blogs/add/" class="btn btn-info">新規投稿</a></p>
      <?php foreach ($this->viewOptions as $viewOption): ?>
        <div class="msg">
          <p><a href="/seed_blog/blogs/show/<?php echo $viewOption['id']; ?>/"><?php echo $viewOption['title']; ?></a></p>
          <p class="day">
              <?php echo $viewOption['created']; ?>
            [<a href="/seed_blog/blogs/edit/<?php echo $viewOption['id']; ?>/" style="color: #00994C;">編集</a>]
            [<a href="/seed_blog/blogs/delete/<?php echo $viewOption['id']; ?>/" style="color: #F33;">削除</a>]
          </p>
        </div>
      <?php endforeach; ?>
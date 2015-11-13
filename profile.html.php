<div class="post profile entry">
    <div class="entry-header">
        <h1 class="entry-title"><?php echo $name ?></h1>
    </div>
    <div class="entry-content">
        <article>
            <?php echo $about; ?> 
            <h2 class="post-index">Posts by this author</h2>
            <?php if (!empty($posts)) { ?>
                <ul class="post-list">
                    <?php $i = 0; $len = count($posts); ?>
                    <?php foreach ($posts as $p): ?>
                        <?php if ($i == 0) {
                            $class = 'item first';
                        } elseif ($i == $len - 1) {
                            $class = 'item last';
                        } else {
                            $class = 'item';
                        }
                        $i++; ?>
                        <li class="<?php echo $class; ?>">
                            <span><a href="<?php echo $p->url ?>"><?php echo $p->title ?></a></span> on
                            <span><?php echo date('d F Y', $p->date) ?></span> - Posted in <span><?php echo $p->tag ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php } else {
                echo 'No posts found!';
            } ?>            
        </article>
    </div>
</div>
<?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
<div class="loop-pagination-container">
    <nav class="pagination loop-pagination">
        <?php if (!empty($pagination['prev'])): ?>
            <a href="?page=<?php echo $page - 1 ?>" rel="prev" class="prev page-numbers">« Previous</a>
        <?php endif;?>
        <?php if (!empty($pagination['next'])): ?>
            <a class="next page-numbers" href="?page=<?php echo $page + 1 ?>" rel="next">Next »</a>
        <?php endif;?>
    </nav>
</div>
<?php endif; ?>
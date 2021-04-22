<?php if (!defined('HTMLY')) die('HTMLy'); ?>
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
                    <?php foreach ($posts as $p): ?>
                        <li class="item">
                            <span><a href="<?php echo $p->url ?>"><?php echo $p->title ?></a></span> on
                            <span><?php echo format_date($p->date); ?></span> - Posted in <span><?php echo $p->category; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php } else {
                echo 'No posts found!';
            } ?>            
        </article>
    </div>
</div>
<?php if (!empty($posts)) { ?>
<?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
<div class="loop-pagination-container">
    <nav class="pagination loop-pagination">
        <?php echo $pagination['html'];?>
    </nav>
</div>
<?php endif; ?>
<?php } ?>
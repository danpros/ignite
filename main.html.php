<?php foreach ($posts as $p): ?>
<div class="post hentry excerpt">
    <?php if (!empty($p->image)):?>
    <div class="featured-image">
        <img style="position:absolute;" width="100%" height="100%" title="<?php echo $p->title; ?>" alt="<?php echo $p->title; ?>" class="attachment-post-thumbnail wp-post-image" src="<?php echo $p->image; ?>">
    </div>
    <?php endif; ?>
    <?php if (!empty($p->audio)):?>
    <div class="featured-image">
        <iframe style="position:absolute;" width="100%" height="100%" class="embed-responsive-item" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe>
    </div>
    <?php endif; ?>
    <?php if (!empty($p->video)):?>
    <div class="featured-image">
        <iframe style="position:absolute;" width="100%" height="100%" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $p->video; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <?php endif; ?>
    <?php if (!empty($p->quote)):?>
    <div class="featured-quote">
        <blockquote class="quote"><i class="fa fa-quote-left"></i> <?php echo $p->quote ?> <i class="fa fa-quote-right"></i></blockquote>
    </div>
    <?php endif; ?>
    <?php if (!empty($p->link)):?>
    <div class="featured-link">
        <i class="fa fa-external-link"></i> <a target="_blank" href="<?php echo $p->link ?>"><?php echo $p->link ?></a>
    </div>
    <?php endif; ?>
    <div class="entry-meta-top">Published <?php echo date('F d, Y', $p->date) ?> by <a href="<?php echo $p->authorUrl; ?>" title="Posts by <?php echo $p->author; ?>" rel="author"><?php echo $p->author; ?></a>            
    </div>
    <div class="excerpt-header">
        <h2 class="excerpt-title">
            <a href="<?php echo $p->url; ?>"><?php echo $p->title; ?></a>
        </h2>
    </div>
    <div class="excerpt-content">
        <article>
            <p><?php echo get_teaser($p->body) ?></p>
            <p><a class="more-link" href="<?php echo $p->url; ?>">Read More <span class="screen-reader-text"><?php echo $p->title; ?></span></a></p>     
        </article>
    </div>
    <div class="excerpt-categories">
        <p><i class="fa fa-folder-open"></i><?php echo $p->category; ?></p>
    </div>            
    <div class="excerpt-tags">
        <p><i class="fa fa-tag"></i><?php echo $p->tag; ?></p>
    </div>
    <div class="excerpt-comments">
        <?php if (disqus_count()) { ?> 
            <p><span><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#disqus_thread"> comments</a></span></p>
        <?php } elseif (facebook()) { ?> 
            <p><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#comments"><span><fb:comments-count href=<?php echo $p->url ?>></fb:comments-count> comments</span></a></p>
        <?php } ?>
    </div>
</div>
<?php endforeach; ?>
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
<?php if (disqus_count()): ?>
    <?php echo disqus_count() ?>
<?php endif; ?>
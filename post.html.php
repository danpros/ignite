<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<div class="post entry full">
    <?php if (!empty($p->image)):?>
    <div class="featured-image">
        <img style="width:100%;" title="<?php echo $p->title; ?>" alt="<?php echo $p->title; ?>" class="attachment-post-thumbnail wp-post-image" src="<?php echo $p->image; ?>">
    </div>
    <?php endif; ?>
    <?php if (!empty($p->audio)):?>
    <div class="featured-image">
        <iframe style="position:absolute;" width="100%" height="100%" class="embed-responsive-item" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe>
    </div>
    <?php endif; ?>
    <?php if (!empty($p->video)):?>
    <div class="featured-image">
        <iframe style="position:absolute;" width="100%" height="100%" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_video_id($p->video); ?>" frameborder="0" allowfullscreen></iframe>
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
    <div class="entry-meta-top"><?php echo i18n("Published");?> <?php echo format_date($p->date); ?> <?php echo i18n("by");?> <a href="<?php echo $p->authorUrl; ?>" title="Posts by <?php echo $p->authorName; ?>" rel="author"><?php echo $p->authorName; ?></a>            
    </div>
    <div class="entry-header">
        <?php if (login()) { echo tab($p); } ?>
        <h1 class="entry-title"><?php echo $p->title; ?></h1>
    </div>
    <div class="entry-content">
        <article>
            <?php echo $p->body; ?>     
        </article>
    </div>
    <div class="entry-meta-bottom">
        <nav class="further-reading">
            <?php if (empty($next)): ?>
                <p class="prev">
                    <span><?php echo i18n("No_posts_found");?></span>
                    <a href="<?php echo site_url();?>"><?php echo i18n("Back_to");?> <?php echo i18n("Home");?></a>
                </p>
            <?php endif; ?>
            <?php if (!empty($next)): ?>
                <p class="prev">
                    <span><?php echo i18n("Next_post");?></span>
                    <a href="<?php echo($next['url']); ?>"><?php echo($next['title']); ?></a>
                </p>
            <?php endif; ?>
            <?php if (empty($prev)): ?>
                <p class="next">
                    <span><?php echo i18n("No_posts_found");?></span>
                    <a href="<?php echo site_url();?>"><?php echo i18n("Back_to");?> <?php echo i18n("Home");?></a>
                </p>
            <?php endif; ?>
            <?php if (!empty($prev)): ?>
                <p class="next">
                    <span><?php echo i18n("Prev_post");?></span>
                    <a href="<?php echo($prev['url']); ?>"><?php echo($prev['title']); ?></a>
                </p>
            <?php endif; ?>
        </nav>
        <div class="author-meta">
            <img width="72" height="72" class="avatar avatar-72 photo" src="<?php echo theme_path();?>images/avatar.png" alt="<?php echo $author->name;?>">                    
            <div class="name-container">
                <h4><a href="<?php echo $p->authorUrl;?>"><?php echo $author->name;?></a></h4>
            </div>
            <?php echo $author->about;?>
        </div>
        <div class="entry-categories">
            <p><i class="fa fa-folder-open"></i><?php echo $p->category; ?></p>
        </div>            
        <div class="entry-tags">
            <p><i class="fa fa-tag"></i><?php echo $p->tag; ?></p>
        </div>
        <div class="excerpt-comments">
            <?php if (disqus_count()) { ?> 
                <p><span><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#disqus_thread"> <?php echo i18n("Comments");?></a></span></p>
            <?php } elseif (facebook()) { ?> 
                <p><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#comments"><span><fb:comments-count href=<?php echo $p->url ?>></fb:comments-count> <?php echo i18n("Comments");?></span></a></p>
            <?php } ?>
        </div>
    </div>
</div>
<?php if (disqus()): ?>
    <?php echo disqus($p->title, $p->url) ?>
<?php endif; ?>
<?php if (disqus_count()): ?>
    <?php echo disqus_count() ?>
<?php endif; ?>
<?php if (facebook() || disqus()): ?>
<section class="comments" id="comments">
    <div class="comments-number">
        <h3><?php echo i18n("Comments");?></h3>
    </div>
    <?php if (facebook()): ?>
        <div class="fb-comments" data-href="<?php echo $p->url ?>" data-numposts="<?php echo config('fb.num') ?>" data-colorscheme="<?php echo config('fb.color') ?>"></div>
    <?php endif; ?>
    <?php if (disqus()): ?>
        <div id="disqus_thread"></div>
    <?php endif; ?>
</section>
<?php endif; ?>

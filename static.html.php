<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<div class="post entry static">
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
            <?php if (!empty($next)): ?>
                <p class="prev">
                    <span><?php echo i18n("Next");?></span>
                    <a href="<?php echo($next['url']); ?>"><?php echo($next['title']); ?></a>
                </p>
            <?php endif; ?>
            <?php if (!empty($prev)): ?>
                <p class="next">
                    <span><?php echo i18n("Prev");?></span>
                    <a href="<?php echo($prev['url']); ?>"><?php echo($prev['title']); ?></a>
                </p>
            <?php endif; ?>
        </nav>
    </div>	
	
</div>
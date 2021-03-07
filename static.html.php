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
</div>
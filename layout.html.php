<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!DOCTYPE html>
<html lang="<?php echo blog_language();?>">
<head>
    <?php echo head_contents();?>
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description; ?>"/>
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <link rel="stylesheet" id="ct-ignite-google-fonts-css" href="<?php echo theme_path();?>css/fonts.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-css" href="<?php echo theme_path();?>css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" id="style-css" href="<?php echo theme_path();?>css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="<?php echo theme_path();?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo theme_path();?>js/jquery-migrate.js"></script>
</head>
<body id="ignite" class="home blog">
<?php if (facebook()) { echo facebook(); } ?>
<?php if (login()) { toolbar(); } ?>
    <!--skip to content link-->
    <a class="skip-content" href="#main">Skip to content</a>
    <header class="site-header" id="site-header" role="banner">
        <div id="title-info" class="title-info">
            <?php if (is_index()) {?>
            <h1 class="site-title"><a href="<?php echo site_url();?>" title="<?php echo blog_title();?>"><?php echo blog_title();?></a></h1>
            <?php } else { ?>
            <h2 class="site-title"><a href="<?php echo site_url();?>" title="<?php echo blog_title();?>"><?php echo blog_title();?></a></h2>
            <?php } ?>
        </div>
        <button id="toggle-navigation" class="toggle-navigation"><i class="fa fa-bars"></i></button>
        <div class="menu-container menu-primary" id="menu-primary" role="navigation">
            <p id="site-description"><?php echo blog_tagline();?></p>
            <?php echo menu('menu-primary-items') ?>
            <?php echo social('social-media-icons');?>
        </div><!-- #menu-primary .menu-container -->
    </header>
    <div id="overflow-container" class="overflow-container">
        <?php if (!empty($breadcrumb)): ?>
            <div class="breadcrumb-trail breadcrumbs" id="breadcrumbs"><?php echo $breadcrumb ?></div>
        <?php endif; ?>
        <div id="main" class="main" role="main">
            <div id="loop-container" class="loop-container">
                <?php echo content();?>
            </div>
        </div> <!-- .main -->
        <div id="sidebar-primary-container" class="sidebar-primary-container">
            <div class="sidebar sidebar-primary" id="sidebar-primary" role="complementary">
                <section id="search-3" class="widget widget_search">
                    <div class="search-form-container">
                        <form role="search">
                            <label class="screen-reader-text"><?php echo i18n("Search_for");?></label>
                            <input class="form-control" type="search" placeholder="<?php echo i18n("Search");?> ..." name="search">
                        </form>
                    </div>
                </section>        
                <section class="widget widget_recent_entries">        
                    <h2 class="widget-title"><?php echo i18n("Recent_posts");?></h2>
                    <?php echo recent_posts() ?>
                </section>
                <?php if (config('views.counter') === 'true') :?>
                <section class="widget widget_popular_entries">        
                    <h2 class="widget-title"><?php echo i18n("Popular_posts");?></h2>
                    <?php echo popular_posts() ?>
                </section>
                <?php endif;?>
                <?php if (disqus()): ?>
                <section class="widget widget_comments">
                    <h2 class="widget-title"><?php echo i18n("Comments");?></h2>
                    <script src="//<?php echo config('disqus.shortname');?>.disqus.com/recent_comments_widget.js?num_items=5&amp;hide_avatars=0&amp;avatar_size=48&amp;excerpt_length=200&amp;hide_mods=0" type="text/javascript"></script><style>li.dsq-widget-item {padding-top:15px;} img.dsq-widget-avatar {margin-right:5px;}</style>
                </section>
                <?php endif;?>
                <section class="widget widget_archive">        
                    <h2 class="widget-title"><?php echo i18n("Archives");?></h2>
                    <?php echo archive_list() ?>
                </section>
                <section class="widget widget_tags">
                    <h2 class="widget-title"><?php echo i18n("Category");?></h2>
					<style>.category-widget ul li a {display:inline}</style>
                    <div class="category-widget"><?php echo category_list();?></div>
                </section>
            </div><!-- #sidebar-primary -->
        </div>
    </div> <!-- .overflow-container -->
    <footer class="site-footer" role="contentinfo">
        <h3><a href="<?php echo site_url();?>"><?php echo blog_title();?></a></h3>
        <span><?php echo blog_description();?></span>
        <div class="design-credit">
            <div class="credit"><?php echo copyright();?></div>
            <span>Design by <a href="https://www.competethemes.com" target="_blank" rel="nofollow">Compete Themes</a></span>
        </div>
    </footer>
    <script type="text/javascript" src="<?php echo theme_path();?>js/production.js" async="async"></script>
    <?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
</body>
</html>
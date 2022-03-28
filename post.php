<!DOCTYPE html>
<html lang="zh">
    <head>
        <?php
        include('header.php');
        ?>
    </head>
    <body>
        <div class="gd_head">
            <a href="<?php $this->options->siteUrl(); ?>">
                <img alt="logo" src="<?php echo $this->options->logoUrl(); ?>">
            </a>
        </div>
        <div class="gd_main">
            <div class="gd_block">
                <div class="gd_box gd_pd gd_post_header">
                    <div id="header">
                        <h1><?php $this->title() ?></h1>
                        <p>作者: <?php $this->author(); ?> 日期: <?php $this->date('c'); ?> 分类: <?php $this->category(','); ?></p>
                        <p>标签: <?php $this->tags(', ', true, 'none'); ?></p>
                    </div>
                </div>
            </div>
            <div class="gd_block">
                <div class="gd_box gd_pd gd_p">
                    <?php $this->content(); ?>
                </div>
            </div>
            <?php if($this->fields->postcopy != null) { ?>
            <div class="gd_block">
                <div class="gd_box gd_pd">
                    <?php $this->fields->postcopy(); ?>
                </div>
            </div>
            <?php } ?>
            <div class="gd_block">
                <div class="gd_box gd_pd">
                    <?php $this->need('comments.php'); ?>
                </div>
            </div>
            <div id="d" class="gd_block" style="height: 145px"></div>
            <div class="gd_copy">
                <?php include('footer.php') ?>
            </div>
        </div>
        <?php include('sidebar.php'); ?>
        <script src="<?php $this->options->themeUrl(); ?>js/main.js"></script>
    </body>
</html>
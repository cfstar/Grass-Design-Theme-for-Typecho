<?php
/**
 * @package Grass Design Theme for Typecho
 * @author Grass Technology
 * @version 1.0.0
 * @link https://gblog.tech/
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include('header.php');
        ?>
    </head>
    <body>
        <div class="gd_head">
            <a href="<?php $this->options->siteUrl(); ?>">
                <img src="<?php echo $this->options->logoUrl(); ?>">
            </a>
        </div>
        <div class="gd_main">
            <div class="gd_block">
                <div class="gd_box gd_post_header">
                    <div id="header">
                        <h1><?php $this->title() ?></h1>
                    </div>
                </div>
            </div>
            <div class="gd_block">
                <div class="gd_menu">
                    <a href="<?php $this->options->siteUrl(); ?>">首页</a><?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}">{title}</a>'); ?>
                </div>
            </div>
            <div class="gd_block">
                <div class="gd_box gd_p">
                    <?php $this->content(); ?>
                </div>
            </div>
            <div class="gd_block">
                <div class="gd_box">
                    <?php $this->need('comments.php'); ?>
                </div>
            </div>
            <div id="d" class="gd_block" style="height: 145px"></div>
            <div class="gd_copy">
                <?php include('footer.php') ?>
            </div>
        </div>
        <script src="<?php $this->options->themeUrl(); ?>js/main.js"></script>
    </body>
</html>
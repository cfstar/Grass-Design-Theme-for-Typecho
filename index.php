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
                    <div>
                        <h3>欢迎来到</h3>
                        <h1><?php $this->options->title() ?></h1>
                        <h2><?php $this->options->description() ?></h2>
                    </div>
                </div>
            </div>
            <div class="gd_block">
                <div class="gd_menu">
                    <a href="<?php $this->options->siteUrl(); ?>">首页</a><?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}">{title}</a>'); ?>
                </div>
            </div>
            <div class="gd_block">
                <div class="gd_box">
                    <h3>文章列表</h3>
                    <?php while($this->next()): ?>
                    <div class="gd_block">
                        <a href="<?php $this->permalink() ?>">
                            <div class="gd_box gd_pd gd_c">
                                <!-- <img src="./img/post1.jpg" height="80px"> -->
                                <h2><?php $this->title() ?></h2>
                                <p>作者: <?php $this->author(); ?> 发布日期: <?php $this->date('Y F j'); ?></p>
                                <p><?php $this->commentsNum('评论 %d'); ?></p>
                                <br>
                                <p>查看文章</p>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
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
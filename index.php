<?php
/**
 * A lite and beautiful theme for Typecho.
 * <a href="https://gblog.tech">生草博客</a> · <a href="主题官网"></a>
 *
 * @package Grass Design Theme for Typecho
 * @author Grass Technology
 * @version 1.0.0
 * @link https://gblog.tech/
 */
?>
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
                        <h3>欢迎来到</h3>
                        <h1><?php $this->options->title() ?></h1>
                        <h2><?php $this->options->description() ?></h2>
                    </div>
                </div>
            </div>
            <div class="gd_block">
                <div class="gd_box gd_pd">
                    <h3>文章列表</h3>
                    <?php while($this->next()): ?>
                    <div class="gd_block">
                        <a href="<?php $this->permalink() ?>">
                            <div class="gd_box gd_c">
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
                    <?php $this->pageNav(); ?>
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
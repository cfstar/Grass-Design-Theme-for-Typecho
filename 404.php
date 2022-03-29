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
            <?php include("frame/notice.php"); ?>
            <div class="gd_block">
                <div class="gd_box gd_pd">
                    <form method="post" action="">
                        <div><input type="text" name="s" class="gd_text" placeholder="搜索"></div>
                    </form>
                </div>
            </div>
            <div class="gd_block">
                <div class="gd_box gd_pd">
                    <h3>找不到当前页面了呜呜呜~</h3>
                </div>
            </div>
            <div id="d" class="gd_block" style="height: 145px"></div>
            <div class="gd_copy">
                <?php include('footer.php') ?>
            </div>
        </div>
        <?php include('frame/sidebar.php'); ?>
        <script src="<?php $this->options->themeUrl(); ?>js/main.js" async></script>
    </body>
</html>
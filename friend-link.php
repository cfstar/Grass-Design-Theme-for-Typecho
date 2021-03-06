<?php
/**
 * 友情链接
 *
 * @package custom
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
            <?php include("frame/notice.php"); ?>
            <div class="gd_block">
                <div class="gd_box gd_pd gd_post_header">
                    <div id="header">
                        <h1>友情链接</h1>
                    </div>
                </div>
            </div>
            <div class="gd_block">
                <div class="gd_box gd_pd">
                    <div class="gd_p">
                        <?php $this->content(); ?>
                    </div>
                    <?php link_parse($this->options->friendLink,0); ?>
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
                    <?php include('frame/comments.php'); ?>
                </div>
            </div>
            <div id="d" class="gd_block" style="height: 145px"></div>
            <div class="gd_copy">
                <?php include('footer.php') ?>
            </div>
        </div>
        <?php include('frame/sidebar.php'); ?>
        <script src="<?php $this->options->themeUrl(); ?>js/main.js"></script>
    </body>
</html>
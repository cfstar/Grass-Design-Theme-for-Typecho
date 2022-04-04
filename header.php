<?php include("core/functions.php"); ?>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
        <title><?php $this->options->title() ?></title>
        <?php if($this->options->jqueryUrl != null) { ?>
        <script src="<?php $this->options->jqueryUrl() ?>"></script>
        <?php } else { ?>
        <script src="https://files.cfstar.cn/cdn/gdt/script/jquery-3.6.0.min.js"></script>
        <?php } ?>
        <script>
            var menuStatus = false;
        </script>
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
        <link rel="preload" as="font">
        <link rel="icon" href="<?php $this->options->faviconUrl() ?>">
        <?php $this->header(); ?>
        <style>
        <?php $this->options->cssCode() ?>
        </style>
        <?php $this->options->headerCode(); ?>
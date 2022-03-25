<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title><?php $this->options->title() ?></title>
        <?php if($this->options->jqueryUrl != null) { ?>
        <script src="<?php $this->options->jqueryUrl() ?>"></script>
        <?php } else { ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <?php } ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
        <link rel="icon" href="<?php $this->options->faviconUrl() ?>">
        <?php $this->header(); ?>
        <style>
        <?php $this->options->cssCode() ?>
        </style>
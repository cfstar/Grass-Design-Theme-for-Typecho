<div id="menu" class="gd_menu">
    <img alt="menu" src="<?php $this->options->themeUrl(); ?>img/menu/menu.svg">
</div>
<div id="menu-content" class="gd_menu_content">
    <div class="menu_main">
        <a href="<?php $this->options->siteUrl(); ?>"><li>首页</li></a>
        <?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}"><li>{title}</li></a>'); ?>
        <div style="margin-top:20px;"><?php $this->options->menuCode(); ?></div>
    </div>
</div>
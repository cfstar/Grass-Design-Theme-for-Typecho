<div id="menu" class="gd_menu">
    <img alt="menu" src="<?php $this->options->themeUrl(); ?>img/menu/menu.svg">
</div>
<div id="menu-content" class="gd_menu_content">
    <div class="menu_main">
    	<?php if($this->options->menuList == null){ ?>
        <a href="<?php $this->options->siteUrl(); ?>"><li>首页</li></a>
        <?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}"><li>{title}</li></a>');}
        else{ link_parse($this->options->menuList,1); } ?>
        <div style="margin-top:20px;">
        <?php
        if(empty($this->options->otherSet) || in_array('closeSidebarTool', $this->options->otherSet) == null){
            if($this->options->sidebarCode != null){
                $json_prase = json_decode($this->options->sidebarCode,true);
                foreach ($json_prase as $key => $value){
                    $type = $value["type"];
                    echo '<div class="gd_block"><div class="gd_box gd_pd">';
                    if($value["title"] != null){
                        echo '<h3 style="margin-bottom: 10px">' . $value["title"] . "</h3>";
                    }
                    if($type == "friend-link"){
                        link_parse($this->options->friendLink, 1);
                    }
                    else if($type == "newest-post"){
                        $this->widget('Widget_Contents_Post_Recent')->parse('<a href="{permalink}"><li>{title}</li></a>');
                    }
                    else if($type == "newest-comment"){
                        $this->widget('Widget_Comments_Recent')->to($comments);
                        while($comments->next()){ ?>
                            <div class="gd_list_item" id="<?php $comments->theId(); ?>"><div class="gd_list_item_info"><b><?php $comments->author(false); ?></b></div><a href="<?php $comments->permalink(); ?>"><div class="gd_p"><?php $comments->excerpt(10, '[...]'); ?></div></a></div>
                        <?php }
                    }
                    else if($type == "search-bar"){
                        ?><form method="post" action=""><div><input type="text" name="s" class="gd_text" placeholder="搜索"></div></form><?php
                    }
                    else{
                        echo '<p>解析失败</p>';
                    }
                    echo "</div></div>";
                }
            }
        }
        $this->options->menuCode(); ?>
        </div>
    </div>
</div>
<?php
function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题栏添加一个LOGO。请使用正方形图标(推荐512x512)'));
    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text('faviconUrl', NULL, NULL, _t('Favicon 地址'), _t('在这里填入一个图片 URL 地址, 以设置网站图标'));
    $jqueryUrl = new Typecho_Widget_Helper_Form_Element_Text('jqueryUrl', NULL, NULL, _t('JQuery CDN 地址'), _t('在这里填入 JQuery CDN URL 地址, 以加载网页必要的JQuery库'));
    $notice = new Typecho_Widget_Helper_Form_Element_Text('notice', NULL, NULL, _t('站点公告'), _t('在页面顶部滚动显示的公告'));
    $cssCode = new Typecho_Widget_Helper_Form_Element_Textarea('cssCode', null, null, _t('自定义 CSS'), _t('通过自定义 CSS 您可以很方便的设置页面样式，自定义 CSS 不会影响网站源代码。'));
    $footerCode = new Typecho_Widget_Helper_Form_Element_Textarea('footerCode', null, null, _t('自定义页脚代码'), _t('该项显示在Copyright下方。支持HTML'));
    $headerCode = new Typecho_Widget_Helper_Form_Element_Textarea('headerCode', null, null, _t('自定义页首代码'), _t('该项在head之间'));
    $menuCode = new Typecho_Widget_Helper_Form_Element_Textarea('menuCode', null, null, _t('自定义菜单代码'), _t('该项在悬浮菜单中'));
    $friendLink = new Typecho_Widget_Helper_Form_Element_Textarea('friendLink', null, null, _t('友情链接'), _t('该项格式请看官方文档。'));
    $sidebarCode = new Typecho_Widget_Helper_Form_Element_Textarea('sidebarCode', null, null, _t('侧边栏工具'), _t('该项格式请看官方文档。'));
    $otherSet = new Typecho_Widget_Helper_Form_Element_Checkbox('otherSet', 
        array('hideTyCopyright' => _t('隐藏Typecho版权'),
            'hideGDTTCopyright' => _t('隐藏GDTT版权'),
            'closeSidebarTool' => _t('关闭小工具')),
        array('hideTyCopyright','hideGDTTCopyright','closeSidebarTool'),
        _t('其他选项'), null);
    $form->addInput($logoUrl);
    $form->addInput($faviconUrl);
    $form->addInput($jqueryUrl);
    $form->addInput($notice);
    $form->addInput($cssCode);
    $form->addInput($headerCode);
    $form->addInput($footerCode);
    $form->addInput($menuCode);
    $form->addInput($sidebarCode);
    $form->addInput($friendLink);
    $form->addInput($otherSet->multiMode());
}
function themeFields($layout) {
    $postcopy = new Typecho_Widget_Helper_Form_Element_Textarea('postcopy', NULL, NULL, _t('文章版权信息'), _t('在这里填入文章版权信息，将在文章末尾展示。支持HTML'));
    $layout->addItem($postcopy);
}
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('normalize.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="<?php $this->options->themeUrl('jquery.js'); ?>"></script>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body class="home paged page page-id-10 page-template-default paged-2 page-paged-2  group-blog">
    <!--[if lt IE 8]>
        <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
    <![endif]-->

    <div id="full_header">
        <div class="top">
            <ul>
                <div class="top_lf">
                    <li>酷8，好玩的GIF动态图 【Ctrl+D收藏】</li>
                </div>
                <div class="top_rf">
                    <li><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
                    <?php if($this->options->allowRegister): ?>
                        <li><a href="<?php $this->options->registerUrl(); ?>"><?php _e('用户注册'); ?></a></li>
                    <?php endif; ?>
                </div>
            </ul>
        </div>
        <div id="header">
            <div class="logo">
                <h1><a href="<?php $this->options->siteUrl(); ?>" rel="home" target="_top"><?php $this->options->title() ?></a></h1>
            </div>
            <div id="nav">
                <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
                <script type="text/javascript">
                    $(function() {$("#nav ul li").eq(0).addClass("nav_home");});;
                </script>
            </div>
        </div>
    </div>
    

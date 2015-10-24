<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * Gif
 * 
 * @package Gif 
 * @author arest
 * @version 1.0.0
 * @link http://www.qintianxiang.com
 */
class Gif_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->___drawFTumbnail = array('Gif_Plugin', 'drawTumbnail');
        Typecho_Plugin::factory('Widget_Archive')->___paginNextArchive = array('Gif_Plugin', 'paginNextArchive');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
        /** 分类名称 */
        
    }
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    public static function convert($gifUrl, $path) {
        $newUrl = str_replace(".gif",".jpg", $gifUrl);

        $path = Typecho_Common::url($path, 
            defined('__TYPECHO_UPLOAD_ROOT_DIR__') ? __TYPECHO_UPLOAD_ROOT_DIR__ : __TYPECHO_ROOT_DIR__);
        $newPath = str_replace(".gif",".jpg", $path);

        $dir = dirname($path);

        $size = getimagesize($path);
        $image = imagecreatetruecolor($size[0], $size[1]);
        $upimg = imagecreatefromgif($path);

        imagecopy($image, $upimg, 0, 0, 0, 0, $size[0], $size[1]);
        imagejpeg($image, $newPath);
        imagedestroy($image);

        return $newUrl;
    }

    public static function drawTumbnail($archive)
    {
        $db = Typecho_Db::get();
        $attachSelect = $db->fetchRow($db->select()->from('table.contents')
            ->where('type = ? and parent=?', 'attachment', $archive->cid)->limit(1));

        if ($attachSelect) {
            $value = $archive->filter($attachSelect);
            if ($value['attachment'] && $value['attachment']->isImage) {
                $url = $value['attachment']->url;
                if ($value['attachment']->type == "gif") {
                    $url = Gif_Plugin::convert($url, $value['attachment']->path);
                }

                return '<img width="260" height="175" src="'.$url.'" class="attachment-post-thumbnail wp-post-image" alt="'.$value["title"].'">';
            }
        }

        return "No Image";
    }

    public static function paginNextArchive($archive) {
        //return "<a href='http://localhost/typecho/page/".$next."/'>后一页 »</a>";
        return $archive->pageLink("下一页", "next");
    }

    public static function charactersNum($archive)
    {
        return mb_strlen($archive->text, 'UTF-8');
    }
}

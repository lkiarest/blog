<?php
/**
 * 模仿ku8的一套皮肤
 * 
 * @package ATheme
 * @author arest
 * @version 1.0
 * @link http://www.qintianxiang.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div id="main_a">
    <div class="main_left">
        <div class="clear"></div>
        <div class="main_left_list dib_wrap">
            <?php while($this->next()): ?>
            <div class="post_box dib">
                <div class="post_box_img">
                    <a href="<?php $this->permalink() ?>" rel="nofollow" title="<?php $this->title() ?>" target="_blank" class="video_hover">
                        <i style="display: none;"></i>
                        <div class="video_ico" style="display: none;"></div>
                        <div>echo:<?php $this->drawFTumbnail(); ?></div>
                        <!-- <img width="260" height="173" src="http://kimg.iubox.com/upl/2015/10/ku8_com_180_1-300x200.jpg" class="attachment-post-thumbnail wp-post-image" alt="<?php $this->title() ?>">     -->
                    </a>
                    <h3><a href="<?php $this->permalink() ?>" rel="bookmark" target="_blank" title="<?php $this->title() ?>"><?php $this->title() ?></a></h3>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="clear"></div>
        <div id="main_page">
            <?php $this->paginNextArchive(); ?>
        </div>
        <div class="more_posts">
            <div class="wp-pagenavi">
                <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
            </div>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main_a">
  <div class="main_left_b">
    <div class="content_all_left">
      <div class="fixed-single-left fr_display_show" id="fixed-single-left"> 
        <div class="share_diy_lf">
        <h6>分享很性感</h6>
          <div class="bdsharebuttonbox bdshare-button-style0-32" data-tag="share_1" data-bd-bind="1445678061964"> <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a> <a class="bds_qzone" data-cmd="qzone" href="#" title="分享到QQ空间"></a> <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a> <a href="#" class="bds_more" data-cmd="more"></a></div>
        </div>
      </div>
    </div>
    <div class="main_left_c">
        <div class="content_all">
            <h1><?php $this->title() ?></h1>
            <div class="postinfo">
                日期：<?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>
                &nbsp;&nbsp;&nbsp;&nbsp;作者：<a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
            </div>
            <div class="content_a">
              <?php $this->content(); ?>
            </div>
        <div class="response_rating">
            <ul>
                <div class="thumbs-rating-container" id="thumbs-rating-281" data-content-id="281"><span class="thumbs-rating-up thumbs-rating-voted" onclick="thumbs_rating_vote(281, 1);" data-text="顶 +">2</span> <span class="thumbs-rating-down" onclick="thumbs_rating_vote(281, 2);" data-text="踩 -">0</span><span class="thumbs-rating-already-voted" data-text="您已经发表过意见了！"></span></div>   </ul>
        </div>
        <div class="response_comments_ajax">
            <div class="response_wpfp_link">
                <span class="wpfp-span"><img src="http://ku8.com/wp-content/plugins/wp-favorite-posts/img/star.png" alt="Favorite" title="Favorite" class="wpfp-img"><img src="http://ku8.com/wp-content/plugins/wp-favorite-posts/img/loading.gif" alt="Loading" title="Loading" class="wpfp-hide wpfp-img"><a class="wpfp-link" href="?wpfpaction=add&amp;postid=281" title="加入收藏" rel="nofollow">加入收藏</a></span>
            </div>
            <div class="comments_ajax_list_dib">
                <a class="ico" url="http://ku8.com/a/281" href="http://ku8.com/a/281#comments">评论</a>
                <div class="comments_ajax_list"></div>
            </div>
        </div>
        <div class="refurl"> 
            <p class="title">请大胆传播</p>
            <p class="post_url"><strong>本文地址：</strong><a href="http://ku8.com/a/281" rel="nofollow">http://ku8.com/a/281</a></p>
            <p class="gif_url"><strong>GIF图地址：</strong><a href="http://ww1.sinaimg.cn/mw690/5ff8df04gw1exavayk32ug208w050u0x.gif" rel="nofollow" target="_blank">http://ww1.sinaimg.cn/mw690/5ff8df04gw1exavayk32ug208w050u0x.gif</a></p>
        </div>
        <div class="clear"></div>
        <div class="adshow ad-single-content-bottom"></div>
        <div class="tags">
            <span class="tag">相关话题：<a href="http://ku8.com/tt/111" rel="tag">奶爸</a><a href="http://ku8.com/tt/110" rel="tag">找亮点</a></span>
        </div>
        <div class="post-navigation">
            <div class="nav-previous nav-links">
                上一篇（旧）：<a href="http://ku8.com/a/285" rel="prev">这是在用生命抢车位</a>
            </div>
            <div class="nav-next nav-links">
                下一篇（新）：<a href="http://ku8.com/a/291" rel="next">社交达人，真不容易</a>
            </div>
        </div>
        <div class="content-ulike"></div>
    </div>
  </div>
</div>
<div class="main_right_b">
    <div id="secondary" class="widget-area" role="complementary"></div><!-- #secondary -->
    <div id="content-ulike-sidebar" class="content-ulike-sidebar">
        <h2>你也许喜欢</h2>
        <ul>
            <li class="ulike_post">
                <a href="http://ku8.com/a/371" title="如何把生鸡蛋放入玻璃酒瓶" target="_blank">
                <img width="289" height="200" src="http://kimg.iubox.com/upl/2015/10/ku8_com_371_1-289x200.jpg" class="attachment-medium wp-post-image" alt="GIF动态图：如何把把生鸡蛋放入玻璃酒瓶"> </a>
                <h3><a href="http://ku8.com/a/371" target="_blank">如何把生鸡蛋放入玻璃酒瓶</a></h3>
            </li>
        </ul>
    </div>
    <div class="custom-adbar" id="adshow_bottom_lr">
        <div id="ad-single-sidebar-bottom" class="adshow ad-single-sidebar-bottom adshow_bottom_lr">
        </div>
    </div>
    <div class="clear"></div>
</div>

<?php $this->need('footer.php'); ?>

<div id="footer">
        <ul>
            <li>关于我们 </li>
            <li>贵州智谱信息科技有限公司 Copyright @ 2015  酷8（酷吧）Ku8.com - <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">黔ICP备1500020号</a></li>
        </ul>
    </div>
    <div id="scroll">
        <a class="scroll_t" title="返回顶部" href="javascript:void(0);" rel="nofollow"></a>
        <a class="scroll_b" title="转到底部" href="javascript:void(0);" rel="nofollow"></a>
    </div>
    <script type="text/javascript">
        jQuery(function() {
              jQuery('.scroll_t').click(function(){jQuery('html,body').animate({scrollTop: '0px'}, 300);});
              jQuery('.scroll_b').click(function(){jQuery('html,body').animate({scrollTop:jQuery('#footer').offset().top}, 300);});
        });
    </script>
    <script>
        jQuery(document).ready(function() {

            // Get all thumbs containers
            jQuery( ".thumbs-rating-container" ).each(function( index ) {

                // Get data attribute
                 var content_id = jQuery(this).data('content-id');

                 var itemName = "thumbsrating"+content_id;

                      // Check if this content has localstorage
                    if (localStorage.getItem(itemName)){

                        // Check if it's Up or Down vote
                        if ( localStorage.getItem("thumbsrating" + content_id + "-1") ){
                            jQuery(this).find('.thumbs-rating-up').addClass('thumbs-rating-voted');
                        }
                        if ( localStorage.getItem("thumbsrating" + content_id + "-0") ){
                            jQuery(this).find('.thumbs-rating-down').addClass('thumbs-rating-voted');
                        }
                    }
            });
        });
    </script>
</body>
</html>

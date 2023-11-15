<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>
      
    </div>
    </div>
   

<!-- } 콘텐츠 끝 -->


<!-- 하단 시작 { -->
<div id="ft">
    <div id="ft_wr">
       <div class="ft-left">
            <div class="footer-logo"><span>미메시스아트뮤지엄</span></div>
            <p class="ft_info">
	           10881 경기도 파주시 문발로 253  파주출판도시 <br>
				T : 031-955-4100<br>
			</p>
       </div>
        <div id="ft_company" class="ft_cnt">
        <div id="ft_link" class="ft_cnt">
                <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
                    <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
                    <a href="<?php echo get_pretty_url('content', 'provision'); ?>">오시는길</a>
                
            </div>
            <div class="sns">
                <ul>
                    <li><a href="#" target="_blank">인스타그램</a></li>
                    <li><a href="#" target="_blank">블로그</a></li>
                    <li><a href="#" target="_blank">유튜브</a></li>
                </ul>
            </div>
           
           
	    </div>
        <div id="ft_copy">Copyright &copy; mimesisartmuseum All rights reserved.</div>
        
    </div>
    <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
    <!-- <div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div> -->

    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
      $("#top_btn").hide();
      $(function () {
		$(window).scroll(function () {
          if ($(this).scrollTop() > 100) { 
            $("#top_btn").fadeIn();
          }else {
            $("#top_btn").fadeOut();
          }
        });     
        $("#top_btn").click(function () {
          $('body,html').animate({
            scrollTop: 0
          }, 800); 
            return false;
		});
	});
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<style>
    .visual{height: 200px;background: skyblue;;}
</style>
<div class="visual">
<a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/img1.jpg" alt="<?php echo $config['cf_title']; ?>"></a>

</div>

<h2>test</h2>

<?php
echo G5_THEME_PATH;
echo "<br>";
echo G5_THEME_IMG_URL."<BR>";
echo G5_THEME_CSS_URL."<BR>";
echo G5_THEME_JS_URL."<BR>";
echo G5_BBS_URL."<BR>";
?>



<?php
include_once(G5_THEME_PATH.'/tail.php');
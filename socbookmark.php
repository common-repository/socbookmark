<?php
/*
Plugin Name: Socbookmark
Plugin URI: http://birkalem.com
Description: Socbookmark social bookmarking
Version: 1.0
Author:  fikret
Author URI: http://birkalem.com
*/
function display_socbookmark($cssid = "social") {
global $post;
?>
<div class="sbmark">
<a title="Save to BeaMark" href="javascript:location.href='http://beamark.com/members/addBookmark.php?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title)"><img src="<?echo get_bloginfo('url')?>/wp-content/plugins/socbookmark/images/beamark.png" alt='' /></a>&nbsp;&nbsp; 
<a title="Save to Digg" href="http://digg.com/submit?url={permalinklink}"><img src="<?echo get_bloginfo('url')?>/wp-content/plugins/socbookmark/images/digg.png" alt='' /></a>&nbsp;&nbsp; 
<a title="Save to Delicious" href="http://del.icio.us/login/?url={permalinklink}&amp;title={thetitle}"><img src="<?echo get_bloginfo('url')?>/wp-content/plugins/socbookmark/images/delicious.png" alt='' /></a>&nbsp;&nbsp; 
<a title="Save to Furl" href="http://www.furl.net/storeIt.jsp?t={thetitle}&amp;u={permalinklink}"><img src="<?echo get_bloginfo('url')?>/wp-content/plugins/socbookmark/images/furl.gif" alt='' /></a>&nbsp;&nbsp; 
<a title="Save to Stumbleupon" href="http://www.stumbleupon.com/submit?url={permalinklink}&amp;title={thetitle}"><img src="<?echo get_bloginfo('url')?>/wp-content/plugins/socbookmark/images/stumbleupon_16x16.gif" alt='' /></a>&nbsp;&nbsp; 
<a title="Save to Reddit" href="http://reddit.com/submit?url={permalinklink};title={thetitle}" ><img src="<?echo get_bloginfo('url')?>/wp-content/plugins/socbookmark/images/reddit.png" alt='' /></a>&nbsp;&nbsp; 
<a title="Save to Technorati" href="http://technorati.com/faves?add={permalinklink}"><img src="<?echo get_bloginfo('url')?>/wp-content/plugins/socbookmark/images/technorati.png" alt='' /></a>&nbsp;&nbsp; 
<a title="Save to Yahoo Myweb" href="http://myweb.yahoo.com/myresults/bookmarklet? t={thetitle}&amp;u={permalinklink}&amp;ei=UTF"><img src="<?echo get_bloginfo('url')?>/wp-content/plugins/socbookmark/images/yahoomyweb.png" alt='' /></a>&nbsp;&nbsp; 
<a title="Save to Facebook" href="http://www.facebook.com/share.php?u={permalinklink}"><img src="<?echo get_bloginfo('url')?>/wp-content/plugins/socbookmark/images/facebook_share_icon.gif" alt='' /></a> 
</div>
<?php
}
?>
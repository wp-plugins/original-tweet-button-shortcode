<?php 
/*
Plugin Name:  Original Tweet Button Shortcode
Plugin URI:   http://beyn.org/original-tweet-button-sc/
Description:  Allows you to use Twitter's original Tweet button by using <code>[tweetthis]</code> shortcode in your posts.
Version:      1.0
Author:       Baris Unver
Author URI:   http://beyn.org/
*/

function original_tweet_button_sc() {
		return '<div sytle="margin:5px"><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script><a href="http://twitter.com/share" class="twitter-share-button">Tweet</a></div>';
}
add_shortcode('tweetthis', 'original_tweet_button_sc');

?>
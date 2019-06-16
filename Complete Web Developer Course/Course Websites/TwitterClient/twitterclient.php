<!-- 
Consumer Key (API Key)	nAb44ykWzQ3eQ1hQ6odDRF26I
Consumer Secret (API Secret)	MFH0aPww6IRjXZ9dhozePhYv32z2MfDTPWpqo8UrdibK8C846y
 -->

<!--
Access Token	309960086-ri0DtNySkojdoXU8oYtUv1nSqv644vgCPEXgDrmB
Access Token Secret	dqr8pmrgPjQakqE760EfskVVT7XwOZ4ZHzAmhN3neoafK 
-->


<?php
	session_start();

	require "twitteroauth-master/autoload.php";
	use Abraham\TwitterOAuth\TwitterOAuth;
	include('twitteroauth-master/src/Config.php');
	include('twitteroauth-master/src/TwitterOAuth.php');

	$api_key = "nAb44ykWzQ3eQ1hQ6odDRF26I";
	$api_secret = "MFH0aPww6IRjXZ9dhozePhYv32z2MfDTPWpqo8UrdibK8C846y";
	$access_token = "309960086-ri0DtNySkojdoXU8oYtUv1nSqv644vgCPEXgDrmB";
	$access_secret = "dqr8pmrgPjQakqE760EfskVVT7XwOZ4ZHzAmhN3neoafK";

	$connection = new TwitterOAuth($api_key, $api_secret, $access_token, $access_secret);
	$tweets = $connection->get("statuses/home_timeline", array("count" => 100, "exclude_replies" => true));




	foreach ($tweets as $tweet) {
		if ($tweet->favorite_count > 10){

			echo $tweet->text;
			echo "<br/>";
	  	}
	  }
  

 ?> 

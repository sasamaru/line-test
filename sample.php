<?php
	
  require_once('./lineBot.php');

  $line = new LineBot("groupIdを記入", 'accessTokenを記入(@line/developerから確認)');
  $line -> push_message("this is test");

?>

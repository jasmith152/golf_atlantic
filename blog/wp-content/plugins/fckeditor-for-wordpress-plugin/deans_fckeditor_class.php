<?php

class deans_fckeditor {
  var $version = '3.3.2';

	function deactivate()
	{
		global $current_user;
		update_user_option($current_user->id, 'rich_editing', 'true', true);
	}
}

$deans_fckeditor = new deans_fckeditor();

<?php

function deans_fckeditor_unmaintained()
{
  echo "<div class=\"error\">";
  echo "<h3>Dean's FCKeditor for WordPress is no longer maintained</h3>";
  echo "<p>It appears that you are still running an extension that has not been maintained for a long time.</p>";
  echo "<p>For security reasons it is strongly recommended to uninstall this extension and install <a href=\"http://wordpress.org/extend/plugins/ckeditor-for-wordpress/\">CKEditor for WordPress</a> to enable CKEditor back</p>";
  echo "<p>To keep your site secure all the functionality of the current plugin has been removed.";
  echo "</div>";
}
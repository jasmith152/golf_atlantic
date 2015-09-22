<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
  <meta name="description" content="Reduced price Industrial equipment for sale ready for immediate delivery from Gulf Atlantic Industrial Equipment." />
  <title>Special Deals, Used Equipment For Sale from Gulf Atlantic Industrial Equipment.</title>
<?php
// Include CSS and Javascript files
include 'includes.html';
?>
	<script type="text/javascript" src="ieupdate.js"></script>
</head>

<body topmargin="0" marginheight="0">
 <div align="center">
<!-- <table id="wrapper" width="1000" cellpadding="0" cellspacing="0" border="0">
  <tr>
   <td id="border-left"><img src="images/spacer.gif" width="20" height="1" border="0" /></td>
   <td width="960" align="center">-->

<?php
// Include the header
include 'header.html';
?>
 <table id="content" width="960" cellpadding="0" cellspacing="0" border="0">
  <tr>
   <td align="left" valign="top" id="main-col">
    <h1>Special Deals</h1>
<?php
$file_contents = file_get_contents('content/special-deals.txt');
echo stripslashes($file_contents);
?>
   </td>
  </tr>
 </table>
<?php
// Include the footer
include 'footer.html';
?>

<!--   </td>
   <td id="border-right"><img src="images/spacer.gif" width="20" height="1" border="0" /></td>
  </tr>
  <tr>
   <td colspan="3" id="border-bottom"></td>
  </tr>
 </table>-->
 </div>
</body>
</html>

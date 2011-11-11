<?php

require_once ( "convert.php" );

if (isset($_REQUEST['redirect'])) { 
  $redirect = $_REQUEST['redirect'];
  if (preg_match("/^[a-z]*:\/\//", $redirect)) {
    header('Location: ' . from_binary($redirect) );
  } else {
    header('Location: http://' . from_binary($redirect) );
  }
  die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html> 
<head>
  <title>011010, a binary url encoding and redirection service</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="default.css" type="text/css" charset="utf-8" />
</head>
<body>
<div id="wrapper">
<div id="header">
  <center><img src="banner.png" alt="011010.com banner">  <h4><i>There are only 10 kinds of people in the world:  Those who understand binary and those who don't.</i></h4></center>
</div>

<div id="page">
<div id="content">
<h2>Enter the link you'd like to convert to binary here:</h2>
<form id="to_binary">
<table cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td id="search">
<input id="url" type="text" tabindex="1" name="url" value="<?= $_REQUEST['url'] ?>"/>
</td>
<td id="button">
<input class="button" type="submit" value="convert"/>
</td>
</tr>
</table>
</form>
<? if (isset($_REQUEST['url'])) { ?>
<br />
<br />
<h2>Your binary link:</h2>
<textarea id="binary" tabindex="1" name="binary">http://011010.com/<?= to_binary($_REQUEST['url']) ?></textarea>
<? }; ?>
</div><!-- content -->
</div><!-- page -->
</div><!-- wrapper -->
<div id="sidebar2" class="sidebar">
  <iframe src="http://rcm.amazon.com/e/cm?t=binaryurl-20&o=1&p=14&l=st1&mode=apparel&search=binary&fc1=000000&lt1=&lc1=3366FF&bg1=FFFFFF&f=ifr" marginwidth="0" marginheight="0" width="160" height="600" border="0" frameborder="0" style="border:none;" scrolling="no"></iframe>
</div>
<div style="clear: both;"> </div>
<div id="footer">
<!-- AddThis Button BEGIN -->
<p>
<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pub=brianegge"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pub=brianegge"></script>
</p>
<!-- AddThis Button END -->
<p>Comments or Suggestions?  Send an email to 011000100111001001101001011000010110111001100101011001110110011101100101 (at) 011010.com</p>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
  var pageTracker = _gat._getTracker("UA-785640-5");
  pageTracker._trackPageview();
} catch(err) {}</script>
  </div>
  </body>
  </html>


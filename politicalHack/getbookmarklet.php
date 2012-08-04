<?php

$head = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
<head>
<title>Get Bookmarklet</title>\n
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=ISO-8859-1\" />\n
</head>
<body>";

echo $head;

echo "<div>\n";

$home = "http://vyu.me/politicalHack";

$href = "href= \"javascript:(function()
         {
         	politicalBM=document.createElement('SCRIPT');
         	politicalBM.type='text/javascript';
         	politicalBM.src='".$home."/bookmarklet.js';
         	document.getElementsByTagName('head')[0].appendChild(politicalBM);
          }
          )();\"
          ";

$bookmarklet = "<div><a ".$href.">Political Bookmarklet</a></div>";


echo $bookmarklet;
echo " abortion";
?>

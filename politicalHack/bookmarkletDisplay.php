<?php 

//returns the long url associated with the short one.
function get_web_page($url)
{
    $out = array();
    $url = trim($url);
    $url = base64_decode($url);
    $url = "curl -L $url";
    exec($url, $out);
    return $out;
}

function checkKeyWords($urlContents)
{
	$urlContents = strtolower($urlContents);
	$words = array("abortion", "tax", "gun control");
		
	$contents;

	for($i = 0; $i < sizeof($words); $i++)
	{
		if(stripos($urlContents, $words[$i]) != false)
		{
			$contents .= "This article is about {$words[$i]}";

			$contents .= "<div class='options'>";
	
			$contents .= "<button onclick='demHover()'>YES</button>";
		
			$contents .= "<button onclick='rebHover()'>NO</button>";

			$contents .= "</div>";

			$contents .= "<div id='pictures'></div>";
			
			break;
		}
		else
		{
			echo "NO MATCH";
		}	
	}
	return $contents;		
}

$keys = array_keys($_GET);

$urlContents = get_web_page($keys[0]);

$commaSep = implode(",", $urlContents);
$widgetBody = checkKeyWords($commaSep);
echo $widgetBody;


$head = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
<head>
<script type='text/javascript' src='widget.js'></script>
<link rel='stylesheet' type='text/css' href='bookmarkletcss.css' />
</head>
<body>";

echo $head;

$banner = "<div class=\"bmbanner\">
           <div class=\"clearing\"></div>
           </div>";

echo $banner;
echo $results;
echo "</div></body></html>";
?>

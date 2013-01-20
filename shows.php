<?php
//DOM Document URL and Parameter
$link = $_GET['link'];

$strUrl = "https://developers.google.com$link";

//Dom Object
$domObject = new DOMDocument();

//Load URL
@$domObject -> loadHTMLfile($strUrl);

//DOM XPath Object
$xPathObject = new DOMXPath($domObject);

//XPath
$idElement = $xPathObject -> query("//iframe[@id='ytplayer']");
$aboutElement = $xPathObject -> query("//div[@id='gc-content']/section[2]");

//Add header
$xml = "<?xml version='1.0' encoding='UTF-8'?>";
$xml .= "<root>";

//Parsing
foreach ($idElement as $key => $idNode)
{
	$aboutNode = $aboutElement -> item($key);
	
	//<data>
	$xml .= "<data>";
	
		//<number>
		$xml .= "<number>$key</number>";
		
		//<id>
		$parsedId	 = $idNode -> getAttribute('src');
		$tmpString	 = substr($parsedId, 24);
		$xml		.= "<id>$tmpString</id>";
		
		//<youtube>
		$xml		.= "<youtube>http://www.youtube.com/watch?v=$tmpString</youtube>";
		
		//<embed>
		$parsedEmbed = $idNode -> getAttribute('src');
		$xml		.= "<embed>http:$parsedEmbed</embed>";
		
		//<about>
		$parsedAbout = $aboutNode -> nodeValue;
		if ($parsedAbout) {
			$xml	.= "<about>$parsedAbout</about>";
		}
		else {
			$xml	.= "<about></about>";
		}
				
	//</data>
	$xml .= "</data>";
}

$xml .= "</root>";

//Generate XML
header('Content-type: text/xml');
echo $xml;
?>
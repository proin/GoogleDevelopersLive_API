<?php
//DOM Document URL and Parameter
$category	= $_GET['category'];
$token		= $_GET['token'];
$strUrl		= "https://developers.google.com/live/$category/browse?c=$token";

//Dom Object
$domObject	= new DOMDocument();

//Load URL
@$domObject -> loadHTMLfile($strUrl);

//DOM XPath Object
$xPathObject = new DOMXPath($domObject);

//XPath
$titleElement	= $xPathObject -> query("//section[@id='previous-shows']/ol/li/a");
$imageElement	= $xPathObject -> query("//img[@class='video-thumbnail']");
$dateElement	= $xPathObject -> query("//section[@id='previous-shows']/ol/li");
$tokenElement	= $xPathObject -> query("//section[@id='previous-shows']/ol/div");

//Add header
$xml = "<?xml version='1.0' encoding='UTF-8'?>";
$xml .= "<root>";

//Parsing
foreach ($titleElement as $key => $titleNode)
{
	$imageNode	= $imageElement	-> item($key);
	$dateNode	= $dateElement	-> item($key);
	
	//<data>
	$xml .= "<data>";
	
		//<number>
		$xml .= "<number>$key</number>";
		
		//<title>
		$parsedTitle = $titleNode -> nodeValue;
		$tmpString	 = htmlspecialchars($parsedTitle);
		$xml		.= "<title>$tmpString</title>";
		
		//<link>
		$parsedLink	 = $titleNode -> getAttribute('href');
		$xml		.= "<link>https://developers.google.com$parsedLink</link>";
		
		//<image>
		$parsedImage = $imageNode -> getAttribute('src');
		$xml		.= "<image>http:$parsedImage</image>";
		
		//<date>
		$parsedDate	 = $dateNode -> nodeValue;
		$tmpString	 = substr($parsedDate, strlen($parsedTitle));
		$xml		.= "<date>$tmpString</date>";
		
	//</data>
	$xml .= "</data>";
}

//NextPageToken
$tokenNode	 = $tokenElement -> item(0);
if ($tokenNode) {
	$parsedToken = $tokenNode	 -> getAttribute('data-cursor');
	$xml		.= "<nextPageToken>$parsedToken</nextPageToken>";
}

$xml .= "</root>";

//Generate XML
header('Content-type: text/xml');
echo $xml;
?>
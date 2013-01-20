<?php
//DOM Document URL
$strUrl = "https://developers.google.com/live/browse";

//Dom Object
$domObject = new DOMDocument();

//Load URL
@$domObject -> loadHTMLfile($strUrl);

//DOM XPath Object
$xPathObject = new DOMXPath($domObject);

//XPath
$categoryElement = $xPathObject -> query("//select[@id='gdl-product-filter']/option");

//Add header
$xml = "<?xml version='1.0' encoding='UTF-8'?>";
$xml .= "<root>";

//Parsing
foreach ($categoryElement as $key => $categoryNode)
{
	//<data>
	$xml .= "<data>";
	
		//<number>
		$xml .= "<number>$key</number>";
		
		//<title>
		$parsedTitle = $categoryNode -> nodeValue;
		$xml		.= "<title>$parsedTitle</title>";
		
		//<code>
		$parsedCode	 = $categoryNode -> getAttribute('value');
		if ($parsedCode) {
			$xml	.= "<code>$parsedCode</code>";
		}
		else {
			$xml	.= "<code>all</code>";
		}
				
	//</data>
	$xml .= "</data>";
}

$xml .= "</root>";

//Generate XML
header('Content-type: text/xml');
echo $xml;
?>
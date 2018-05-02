<?php

/**
 * @author Reficul
 * @copyright 2018
 */
header("Content-type: text/xml");

$list = array(
    "eggs",
    "bread",
    "milk",
    "bananas",
    "bacon",
    "cheese"
);

$xml = new SimpleXMLElement("<grocery />");

$need = $xml->addChild("list");

foreach($list as $item) {
    $need->addChild("item", $item);
}

// for nice output
$dom = dom_import_simplexml($xml)->ownerDocument;
$dom->formatOutput = true;
echo $dom->saveXML();

?>
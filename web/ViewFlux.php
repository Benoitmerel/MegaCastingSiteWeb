<?php
// Set the content type to be XML, so that the browser will   recognise it as XML.
header("content-type: application/xml; charset=ISO-8859-15");

// "Create" the document.
$xml = new DOMDocument("1.0", "ISO-8859-15");

// Create some elements.
$xml_rss = $xml->createElement("rss");
$xml_rss->setAttribute("version", "2.0");

$xml_channel = $xml->createElement("channel");
$xml_channel->appendChild($xml->createElement("title", "MegaCastings"));
$xml_channel->appendChild($xml->createElement("link", "http://172.16.2.137/MegaCasting/"));
$xml_channel->appendChild($xml->createElement("description", "Flux RSS des offres"));

foreach ($ListResearch as $offre) {
    $xml_item = $xml->createElement("item");
    $xml_item->appendChild($xml->createElement("title", utf8_decode($offre->getIntitule())));
    $xml_item->appendChild($xml->createElement("description", utf8_decode($offre->getDescriptionPoste())));
    $xml_item->appendChild($xml->createElement("dateDePublication", $offre->getDateDebutPublication()));
    $xml_item->appendChild($xml->createElement("nombreDePostes", $offre->getNombreDePostes()));
    $xml_item->appendChild($xml->createElement("reference", utf8_decode($offre->getReference())));
    $xml_item->appendChild($xml->createElement("dureeDiffusion", $offre->getDureeDeDiffusion()));
    $xml_item->appendChild($xml->createElement("descriptionDuProfil", utf8_decode($offre->getDescriptionProfil())));
    $xml_item->appendChild($xml->createElement("typeDeContrat", utf8_decode($offre->getTypesDeContrat()->getNomContrat())));
    $xml_item->appendChild($xml->createElement("metier", utf8_decode($offre->getMetier()->getNomMetier())));
    $xml_item->appendChild($xml->createElement("client", utf8_decode($offre->getClients()->getNom())));
    $xml_item->appendChild($xml->createElement("link", "http://172.16.2.137/MegaCasting/Offre.php?id=".$offre->getIdentifiant()));
    $xml_channel->appendChild($xml_item);
}

$xml_rss->appendChild($xml_channel);
$xml->appendChild($xml_rss);

// Parse the XML.
print $xml->saveXML();

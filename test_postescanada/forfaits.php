<?php 
	/*Modification pour test
		if...
	*/

	
	$pcDoc -> load("postescanada.xml");

	$xsltDoc = new DOMDocument();
	$xsltDoc -> load("pc2html.xslt");

	$proc = new XSLTProcessor();
	$proc->importStyleSheet($xsltDoc);

	echo $proc->transformToXML($pcDoc);
?>
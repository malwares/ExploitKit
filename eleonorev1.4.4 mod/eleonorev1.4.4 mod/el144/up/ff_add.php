<?php

	$url = $_REQUEST['url'];
	
	if(!empty($url))
	{
		$file = file('./src/chrome/content/dlhelper.js');
		for($i = 0; $i < count($file); $i++)
		{
			if(strstr($file[$i], 'url :'))
				$newfile[] = 'url : "'.$url.'",';
			else
				$newfile[] = $file[$i];
		}
		
		file_put_contents('./src/chrome/content/dlhelper.js', $newfile);
	}

	$zip = new ZipArchive();
	
	$jarfilename = './dlhelper'.time().'.jar';
	
	$zip->open($jarfilename, ZIPARCHIVE::CREATE);
	
	$zip->addFile('./src/chrome/content/dlhelper.js', 'content/dlhelper.js');
	$zip->addFile('./src/chrome/content/dlhelper.xul', 'content/dlhelper.xul');
	
	$zip->close();

	$xpifilename = './dlhelper'.time().'.xpi';
	
	$zip = new ZipArchive();
	
	$zip->open($xpifilename, ZIPARCHIVE::CREATE);

	$zip->addFile('./src/chrome.manifest', 'chrome.manifest');
	$zip->addFile('./src/install.rdf', 'install.rdf');
	
	$zip->addFile($jarfilename, 'chrome/dlhelper.jar');
	
	$zip->close();
	
	header("Content-Disposition: attachment; filename=dlhelper.xpi"); 
	header('Content-type: application/x-xpinstall');
	readfile($xpifilename);
	
	unlink($jarfilename);
	unlink($xpifilename);
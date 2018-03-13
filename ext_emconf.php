<?php

########################################################################
# Extension Manager/Repository config file for ext: "cab_uniquenews"
#
# Auto generated 27-02-2007 14:43
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Unique tt_news Listing',
	'description' => 'On pages with more than one LIST or LATEST tt_news plugins, this extension prevents displaying the same tt_news twice.',
	'category' => 'fe',
	'author' => 'Martin-Pierre Frenette',
	'author_email' => 'typo3@cablan.net',
	'shy' => '',
	'dependencies' => 'tt_news',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'tt_news' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:10:{s:9:"ChangeLog";s:4:"7c43";s:10:"README.txt";s:4:"9fa9";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"18ce";s:14:"ext_tables.php";s:4:"7e50";s:23:"flexform_ds_no_sPID.xml";s:4:"06fc";s:34:"pi1/class.tx_cabuniquenews_pi1.php";s:4:"af31";s:34:"sv1/class.tx_cabuniquenews_sv1.php";s:4:"bcbe";s:19:"doc/wizard_form.dat";s:4:"13b7";s:20:"doc/wizard_form.html";s:4:"a6ab";}',
	'suggests' => array(
	),
);

?>
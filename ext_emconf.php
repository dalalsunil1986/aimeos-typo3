<?php

########################################################################
# Extension Manager/Repository config file for ext: "aimeos"
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF['aimeos'] = array(
	'title' => 'Aimeos web shop',
	'description' => 'Aimeos is a fast, flexible and usability optimized shop system and e-commerce solution available in multiple languages (also available as TYPO3 distribution). Several plugins e.g. for facetted search, product listing, detail view, basket, checkout process and other parts of a shop are available. Furthermore, Aimeos offers powerful interfaces to integrate CRM and ERP systems as well as payment and delivery service providers',
	'category' => 'plugin',
	'version' => '18.10.0-dev',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'author' => 'Aimeos',
	'author_email' => 'aimeos@aimeos.org',
	'author_company' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.4.0-7.99.99',
			'typo3' => '7.6.0-9.99.99',
			'scheduler' => '7.6.0-9.99.99',
			'static_info_tables' => '6.0.0-6.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'realurl' => '1.12.8-2.99.99',
		),
	),
	'autoload' => array (
		'psr-4' => array (
			'Aimeos\\Aimeos\\' => 'Classes',
		),
	),
);

?>

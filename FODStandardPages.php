<?php
/**
 * Pages standardly used by the FOD Wikis
 *
 * Documentation: https://github.com/enterprisemediawiki/FODStandardPages
 * Support:       https://github.com/enterprisemediawiki/FODStandardPages
 * Source code:   https://github.com/enterprisemediawiki/FODStandardPages
 *
 * @file FODStandardPages.php
 * @addtogroup Extensions
 * @author James Montalvo
 * @copyright © 2014 by James Montalvo
 * @licence GNU GPL v3+
 */

# Not a valid entry point, skip unless MEDIAWIKI is defined
if ( ! defined( 'MEDIAWIKI' ) ) {
	die( 'FODStandardPages extension' );
}

define( 'FOD_STANDARD_SETTINGS_VERSION', '0.1.0' );

$GLOBALS['wgExtensionCredits']['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'FOD Standard Pages',
	'url'            => 'http://github.com/enterprisemediawiki/FODStandardPages',
	'author'         => 'James Montalvo',
	'descriptionmsg' => 'fodstandardpages-desc',
	'version'        => FOD_STANDARD_SETTINGS_VERSION
);

$GLOBALS['wgMessagesDirs']['FODStandardPages'] = __DIR__ . '/i18n';

// Autoload setup class (location of parser function definitions)
// $GLOBALS['wgAutoloadClasses']['FODStandardPages'] = __DIR__ . '/FODStandardPages.class.php';

$GLOBALS['egFODStandardPagesFile'] = __DIR__ . "/pages.json";
$GLOBALS['egFODStandardPagesFileRoot'] = __DIR__ . "/pages";
$GLOBALS['egFODStandardPagesFileEditSummary'] = "Updated with content from Extension:FODStandardPages version " . FOD_STANDARD_SETTINGS_VERSION

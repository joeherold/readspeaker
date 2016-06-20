<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Readspeaker
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'ReadSpeaker',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'ReadSpeaker\CE_ReadSpeakerRead'   => 'system/modules/readspeaker/classes/CE_ReadSpeakerRead.php',
	'ReadSpeaker\CE_ReadSpeakerSkip'   => 'system/modules/readspeaker/classes/CE_ReadSpeakerSkip.php',
	'ReadSpeaker\CE_ReadSpeakerEnd'    => 'system/modules/readspeaker/classes/CE_ReadSpeakerEnd.php',
	'ReadSpeaker\FE_ReadSpeakerSkip'   => 'system/modules/readspeaker/classes/FE_ReadSpeakerSkip.php',
	'ReadSpeaker\BE_RS_Help'           => 'system/modules/readspeaker/classes/BE_RS_Help.php',
	'ReadSpeaker\RS_Messages'          => 'system/modules/readspeaker/classes/RS_Messages.php',
	'ReadSpeaker\CE_ReadSpeakerDoc'    => 'system/modules/readspeaker/classes/CE_ReadSpeakerDoc.php',
	'ReadSpeaker\BE_ReadSpeaker'       => 'system/modules/readspeaker/classes/BE_ReadSpeaker.php',
	'ReadSpeaker\BE_RS_Contact'        => 'system/modules/readspeaker/classes/BE_RS_Contact.php',
	'ReadSpeaker\FE_ReadSpeaker'       => 'system/modules/readspeaker/classes/FE_ReadSpeaker.php',
	'ReadSpeaker\CE_ReadSpeaker'       => 'system/modules/readspeaker/classes/CE_ReadSpeaker.php',
	'ReadSpeaker\FE_ReadSpeakerRead'   => 'system/modules/readspeaker/classes/FE_ReadSpeakerRead.php',
	'ReadSpeaker\BE_RS_CustomerPortal' => 'system/modules/readspeaker/classes/BE_RS_CustomerPortal.php',

	// Models
	'ReadSpeaker\RsSettingsModel'      => 'system/modules/readspeaker/models/RsSettingsModel.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_readspeaker_doc'             => 'system/modules/readspeaker/templates',
	'ce_readspeaker_end'             => 'system/modules/readspeaker/templates',
	'mod_readspeaker'                => 'system/modules/readspeaker/templates',
	'be_readspeaker_customer_portal' => 'system/modules/readspeaker/templates',
	'be_readspeaker_skip'            => 'system/modules/readspeaker/templates',
	'ce_readspeaker'                 => 'system/modules/readspeaker/templates',
	'fe_readspeaker'                 => 'system/modules/readspeaker/templates',
	'be_readspeaker_contact'         => 'system/modules/readspeaker/templates',
	'be_readspeaker_read'            => 'system/modules/readspeaker/templates',
	'moo_accordion'                  => 'system/modules/readspeaker/templates/mootools',
	'moo_tablesort'                  => 'system/modules/readspeaker/templates/mootools',
	'moo_slider'                     => 'system/modules/readspeaker/templates/mootools',
	'moo_slimbox'                    => 'system/modules/readspeaker/templates/mootools',
	'moo_mediabox'                   => 'system/modules/readspeaker/templates/mootools',
	'moo_chosen'                     => 'system/modules/readspeaker/templates/mootools',
	'be_readspeaker_help_de'         => 'system/modules/readspeaker/templates',
	'be_readspeaker_help'            => 'system/modules/readspeaker/templates',
	'j_slider'                       => 'system/modules/readspeaker/templates/jquery',
	'j_mediaelement'                 => 'system/modules/readspeaker/templates/jquery',
	'j_colorbox'                     => 'system/modules/readspeaker/templates/jquery',
	'j_tablesort'                    => 'system/modules/readspeaker/templates/jquery',
	'j_accordion'                    => 'system/modules/readspeaker/templates/jquery',
));
